<?php

$db_host = "sql.mit.edu";
$db_username = "happy";
$db_password = "not my real password";
$db_database = "happy+databaseName";

mysql_connect($db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_database) or die(mysql_error());

function mysql_escape($text) {
    return mysql_real_escape_string($text);
}

$query = <<<ASDF
CREATE TABLE `artists` (
    `id` VARCHAR( 256 ) NOT NULL ,
    `name` TEXT NOT NULL ,
    `image` TEXT NOT NULL ,
    `start` TEXT NOT NULL ,
    PRIMARY KEY ( `id` )
);
ASDF;
mysql_query($query);
echo mysql_error();

$query = <<<ASDF
CREATE TABLE `albums` (
    `id` VARCHAR( 256 ) NOT NULL ,
    `name` TEXT NOT NULL ,
    `image` TEXT NOT NULL ,
    `track_count` INT NOT NULL,
    PRIMARY KEY ( `id` )
);
ASDF;
mysql_query($query);
echo mysql_error();

$query = <<<ASDF
CREATE TABLE `artist_to_album` (
    `artist` VARCHAR( 256 ) NOT NULL ,
    `album` VARCHAR( 256 ) NOT NULL ,
    PRIMARY KEY ( `artist` , `album` )
)
ASDF;
mysql_query($query);
echo mysql_error();


$cursor = "true";
while (true) {
    $query = <<<ASDF
        {
            "cursor" : $cursor,
            "query" : [{
                "type" : "/music/artist",
                "id" : null,
                "name~=" : "^The M*",
                "name" : null,
                "active_start" : null,
                "/common/topic/image" : [{
                    "id" : null,
                    "limit" : 1
                }],
                "album" : [{
                    "id" : null,
                    "name" : null,
                    "/common/topic/image" : [{
                        "id" : null,
                        "limit" : 1
                    }],
                    "track" : [{
                        "return" : "count"
                    }]        
                }],
                "limit" : 10
            }]
        }
ASDF;
    $string_data = file_get_contents(
        "http://api.freebase.com/api/service/mqlread?query=" . 
        urlencode($query));
        
    $json_data = json_decode($string_data);
    
    if (!$json_data->cursor) {
        break;
    }
    $cursor = '"' . $json_data->cursor . '"';
    echo "cursor: " . $cursor . "\n";

    $result = $json_data->result;
    
    for ($i = 0; $i < sizeof($result); $i++) {
        $artist = $result[$i];
        
        $id = $artist->id;
        $name = $artist->name;
        
        $temp = "/common/topic/image";    
        $image = $artist->$temp;
        $image = $image[0];
        $image = $image->id;
        $image = "http://www.freebase.com/api/trans/raw".$image;
        
        $start = $artist->active_start;
        
        $id = mysql_escape($id);
        $name = mysql_escape($name);
        $image = mysql_escape($image);
        $start = mysql_escape($start);
        
        $sql = "INSERT INTO `artists` (id, name, image, start) VALUES ('$id', '$name', '$image', '$start')";
        mysql_query($sql);
        echo "query: $sql\n";
        
        $artist_id = $id;
        $albums = $artist->album;
        for ($ii = 0; $ii < sizeof($albums); $ii++) {
            $album = $albums[$ii];
            
            $id = $album->id;
            $name = $album->name;
            
            $temp = "/common/topic/image";    
            $image = $album->$temp;
            $image = $image[0];
            $image = $image->id;
            $image = "http://www.freebase.com/api/trans/raw".$image;
            
            $track_count = $album->track;
            $track_count = $track_count[0];        
        
            $sql = "INSERT INTO `albums` (id, name, image, track_count) VALUES ('$id', '$name', '$image', '$track_count')";
            mysql_query($sql);
            echo "query: $sql\n";
            
            $sql = "INSERT INTO `artist_to_album` (artist, album) VALUES ('$artist_id', '$id')";
            mysql_query($sql);
            echo "query: $sql\n";
        }
    }
}

echo "done!\n";

?>
