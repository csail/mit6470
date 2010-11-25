// unless otherwise stated (above a function definition)
// these functions were written by myself, Greg Little,
// and I release them into the public domain.

// got this idea from somewhere (including the name "klass"),
// but I forget where
function klass(o) {
    var self = function () {
        if (self.prototype.__init__) {
            self.prototype.__init__()
        }
    }
    foreach(o, function (func, key) {
        self.prototype[key] = func
    })
    return self
}

function mySplit(s, sep) {
    if (emptyString(s)) return []
    return s.split(sep)
}

function emptyString(s) {
    return !s || s.match(/^\s*$/)
}

function my_output(s) {
    try {
        console.log(s)
        return
    } catch (e) {
    }
    try {
        Packages.java.lang.System.out.print(s)
        return
    } catch (e) {
    }
    try {
        alert(s)
        return
    } catch (e) {
    }
    throw "trying to output: " + s
}
if ((typeof output) == "undefined") {
    output = my_output
}
function outputln(s) {
    output(s + '\n')
}

function globalMatch(re, s) {
    var ret = []
    var m
    while (m = re.exec(s)) {
        m.left = RegExp.leftContext
        m.right = RegExp.rightContext            
        ret.push(m)
        
        if (!re.global) break
    }
    return ret
}

// add objB to objA
function merge(objA, objB) {
    foreach(objB, function (v, k) {
        objA[k] = v
    })
    return objA
}

function pickRandom(obj) {
    if (obj instanceof Array) {
        return obj[randomIndex(obj.length)]
    } else {
        return obj[pickRandom(keys(obj))]
    }
}

function link(name, url) {
    return '<a href="' + escapeXml(url) + '">' + escapeXml(name) + '</a>'
}

function foreachRandom(a, test) {
    if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        foreach(shuffle(range(0, a.length - 1)), function (i) {
            if (test(a[i], i) == false) return false
        })
    } else {
        foreach(shuffle(keys(a)), function (k) {
            if (test(a[k], k) == false) return false
        })
    }
}
forEachRandom = foreachRandom

function range(min, max) {
    var a = []
    for (var i = min; i <= max; i++) {
        a.push(i)
    }
    return a
}

function jaxer_jsdb(q) {
    var s = new Jaxer.Socket()
    s.open('localhost', 52666)
    s.writeString(q.length + "\n" + q);
    s.flush()
    
    var ret = []
    var chunk = null
    while (chunk = s.readString(256)) {
        ret.push(chunk)
    }
    
    return ret.join('')
}

function time() {
    return new Date().getTime()
}

function addUrlParam(url, key, value) {
    if (!url.match(/\?/)) { url += "?" } else { url += "&" }
    return url + escapeURL(key) + "=" + escapeURL(value)
}

function csv(val) {
    if (typeof val == "object") {
        return map(val, function (v) { return csv(v)}).join(',')
    } else if (typeof val == "string") {
        return '"' + val.replace(/"/g, '""') + '"'
    } else {
        return '' + val
    }
}

function globalEval(___hguydnvuyyiiwtsmjhg___) {
    return eval(___hguydnvuyyiiwtsmjhg___)
}

// ensure("db.pima.cards", {})
// ensure(null, "db.pima.cards", {})
// ensure(db, "pima.cards", {})
// ensure(db, ".pima.cards", {})
// ensure(db, ["pima", "cards"], {})
function ensure(obj, path, defaultValue) {
    if (typeof obj == "string") {
        return ensure(null, obj, path)
    }
    if (obj && (typeof path == "string") && path.match(/^[^\[\.]/)) {
        return ensure(obj, '.' + path, defaultValue)
    }
    
    if (defaultValue == undefined) {
        defaultValue = {}
    }
    
    var so_far = obj ? "obj" : ""
    if (typeof path == "string") {
        var parts = path.match(/(^|\.)\w+|\[('(\\'|[^'])*'|"(\\"|[^"])*"|[^\]]+)\]/g)
    } else {
        var parts = map(path, function (part) { return '[' + json(part) + ']' })
    }
    foreach(parts, function (part, i) {
        so_far += part
        if (typeof eval(so_far) == "undefined") {
            if (i < parts.length - 1) {
                if (parts[i + 1].match(/\[\d+\]/)) {
                    eval(so_far + " = []")
                } else {
                    eval(so_far + " = {}")
                }
            } else {
                eval(so_far + " = defaultValue")
            }
        }
    })
    return eval(so_far)
}

// adapted from "parse" function at http://json.org/json.js
var safeJson_re = /^(\s+|\(function \(\) \{\s*var data =|\(|\)|,|\[|\]|:|\{|\}|'[^']*'|"[^"]*"|\btrue\b|\bfalse\b|\bnull\b|\bundefined\b|[-+]?(\d+\.?\d*|\.\d+)([eE][-+]?\d+)?|\bdata\b(\["[^"]*"\]|\s*=)*|\breturn data\b|\/\*([^\*]|\*[^\/])*\*\/)+?$/
function safeJson(s) {
    return safeJson_re.test(s)
}

function repeat(s, count) {
    if (typeof s == "number") {
        return repeat(count, s)
    } else if (typeof s == "string") {
        var list = []
        for (var i = 0; i < count; i++) {
            list.push(s)
        }
        return list.join('')
    } else if (typeof s == "function") {
        for (var i = 0; i < count; i++) {
            s(i)
        }
    }
}

function deepClone(o) {
    return eval(json(o))
}

function clone(o) {
    if (typeof o == "object") {
        if (o instanceof Array) {
            return o.slice(0)
        }
    }
    throw "clone error: unsupported type"
}

function gaussian(x, mean, stdDev) {
    if (mean == null) mean = 0
    if (stdDev == null) stdDev = 1
    return Math.exp(-Math.pow(x - mean, 2) / (2 * Math.pow(stdDev, 2)))
}

function getMean(a) {
    return getSum(a) / a.length
}

function getVariance(a, mean) {
    if (mean == null) {
        mean = getMean(a)
    }
    var s = 0
    foreach(a, function (e) {s += Math.pow(e - mean, 2)})
    return s / a.length    
}

function getStdDev(a, mean) {
    return Math.sqrt(getVariance(a, mean))
}

function getStats(a) {
    var mean = getMean(a)
    var stdDev = getStdDev(a, mean)
    return {mean : mean, stdDev: stdDev}
}

function swap(o, i1, i2) {
    var temp = o[i1]
    o[i1] = o[i2]
    o[i2] = temp
}

function shuffle(a) {
    for (var i = 0; i < a.length; i++) {
        swap(a, i, randomIndex(a.length))
    }
    return a
}

function randomIndex(n) {
    return Math.floor(Math.random() * n)
}

function last(a, i) {
    if (i == null) i = -1
    i = i % a.length
    if (i < 0) i += a.length
    return a[i]
}

function setProp(obj, prop, otherObj) {
    if (obj[prop] && (typeof obj[prop] == "object")) {
        foreach(otherObj, function (v, k) {
            obj[prop][k] = v
        })
    } else {
        obj[prop] = otherObj
    }
}

function values(obj) {
    var a = []
    foreach(obj, function (e) {a.push(e)})
    return a
}

function keys(obj) {
    var a = []
    foreach(obj, function (v, k) {a.push(k)})
    return a
}

function getSum(a, test) {
    if (test == null) {
        test = function (v, k) {
            return v
        }
    } else if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        var s = 0
        for (var i = 0; i < a.length; i++) {
            var v = a[i]
            s += test(v, i)
        }
        return s
    } else {
        var s = 0
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                var v = a[k]
                s += test(v, k)
            }
        }
        return s
    }
}

function find(a, test) {
    if (test == null) {
        test = function (v, k) {
            return v
        }
    } else if (typeof test != "function") {
        var testVal = test
        test = function (v, k) {
            return testVal == v
        }
    }
    
    if (a instanceof Array) {
        for (var i = 0; i < a.length; i++) {
            var v = a[i]
            if (test(v, i)) {
                return i
            }
        }
        return -1
    } else {
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                var v = a[k]
                if (test(v, k)) {
                    return k
                }
            }
        }
        return null
    }
}

function getMin(a, test) {
    if (test == null) {
        test = function (v, k) {
            return v
        }
    } else if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        var bestScore = null
        var bestElement = null
        for (var i = 0; i < a.length; i++) {
            var v = a[i]
            var score = test(v, i)
            if (bestElement == null || score < bestScore) {
                bestScore = score
                bestElement = v
            }
        }
        return bestElement
    } else {
        var bestScore = null
        var bestElement = null
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                var v = a[k]
                var score = test(v, k)
                if (bestElement == null || score < bestScore) {
                    bestScore = score
                    bestElement = v
                }
            }
        }
        return bestElement
    }
}

function getMax(a, test) {
    if (test == null) {
        test = function (v, k) {
            return v
        }
    } else if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        var bestScore = null
        var bestElement = null
        for (var i = 0; i < a.length; i++) {
            var v = a[i]
            var score = test(v, i)
            if (bestElement == null || score > bestScore) {
                bestScore = score
                bestElement = v
            }
        }
        return bestElement
    } else {
        var bestScore = null
        var bestElement = null
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                var v = a[k]
                var score = test(v, k)
                if (bestElement == null || score > bestScore) {
                    bestScore = score
                    bestElement = v
                }
            }
        }
        return bestElement
    }
}

function filter(a, test) {
    if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        var b = []
        for (var i = 0; i < a.length; i++) {
            var v = a[i]
            if (test(v, i)) {
                b.push(v)
            }
        }
        return b
    } else {
        var b = {}
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                var v = a[k]
                if (test(v, k)) {
                    b[k] = v
                }
            }
        }
        return b
    }
}

function forEach(a, test) {
    if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        for (var i = 0; i < a.length; i++) {
            if (test(a[i], i) == false) break
        }
    } else {
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                if (test(a[k], k) == false) break
            }
        }
    }
}
foreach = forEach

function map(a, test) {
    if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        var b = []
        for (var i = 0; i < a.length; i++) {
            b.push(test(a[i], i))
        }
        return b
    } else {
        var b = {}
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                b[k] = test(a[k], k)
            }
        }
        return b
    }
}

function mapToSelf(a, test) {
    if (typeof test == "string") {
        var testString = test
        test = function (v, k) {
            var i = k
            var e = v
            return eval(testString)
        }
    }
    if (a instanceof Array) {
        for (var i = 0; i < a.length; i++) {
            a[i] = test(a[i], i)
        }
        return a
    } else {
        for (var k in a) {
            if (a.hasOwnProperty(k)) {
                a[k] = test(a[k], k)
            }
        }
        return a
    }
}

function escapeUnicodeChar(c) {
    var code = c.charCodeAt(0)
    var hex = code.toString(16)
    if (code < 16) return '\\u000' + hex
    if (code < 256) return '\\u00' + hex
    if (code < 4096) return '\\u0' + hex
    return '\\u' + hex
}

function escapeString(s) {
    return s.
        replace(/\\/g, '\\\\').
        replace(/\t/g, '\\t').
        replace(/\n/g, '\\n').
        replace(/\r/g, '\\r').
        replace(/'/g, '\\\'').
        replace(/"/g, '\\\"').
        replace(/[\u0000-\u001F]|[\u0080-\uFFFF]/g, escapeUnicodeChar)
}

function escapeRegex(s) {
    return escapeString(s).replace(/([\{\}\(\)\|\[\]\^\$\.\*\+\?])/g, "\\$1")
}

function my_json(o) {
    var touched = []
    var result = []
    var appendAtEnd = []
    function my_json_helper(result, o, indent, path) {
        switch (typeof o) {
            case 'object':
                // special case for Java strings
                try {
                    if (o instanceof Packages.java.lang.String) {
                        result.push('"')
                        result.push(escapeString('' + o));
                        result.push('" /* was a Java String */')
                        break
                    }
                } catch (e) {
                }
                
                // special case for null
                if (o == null) {
                    result.push('null')
                    break
                }
            
                if (o.__temp_json_path) {
                    result.push("/* ")
                    result.push(o.__temp_json_path)
                    result.push(" */0")
                    
                    appendAtEnd.push("\t" + path + " = " + o.__temp_json_path + "\n")
                    break
                }
                o.__temp_json_path = path       
                touched.push(o)
                if (o instanceof Array) {
                    result.push("[\n")
                    var indentMore = indent + "\t"
                    for (var i = 0; i < o.length; i++) {
                        result.push(indentMore)
                        my_json_helper(result, o[i], indentMore, path + "[" + i + "]")
                        if (i + 1 < o.length) {
                        	result.push(",\n")
                        } else {
                        	result.push("\n")
                        }
                    }
                    result.push(indent)
                    result.push("]")
                } else if (o instanceof Date) {
                    result.push("(function () {var d = new Date(); d.setTime(")
                    result.push(o.getTime())
                    result.push("); return d})()")
                } else {
                    result.push("{\n")
                    var indentMore = indent + "\t"
                    var first = true
                    for (var k in o) {
                        if (o.hasOwnProperty(k)) {
                            if (k == "__temp_json_path") continue;
                            
                        	if (first) {
                        		first = false                        		
                        	} else {
                        		result.push(",\n")
                        	}
                            result.push(indentMore)
                            result.push('"')
                            var escapedK = escapeString(k)
                            result.push(escapedK)
                            result.push('" : ')
                            my_json_helper(result, o[k], indentMore, path + "[\"" + escapedK + "\"]")
                        }
                    }
                    if (!first) {
                    	result.push("\n")
                    }
                    result.push(indent)
                    result.push("}")
                }
                break
            case 'string':
                result.push('"')
                result.push(escapeString(o));    
                result.push('"')
                break
            case 'function':
                result.push(o)
                break
            case 'null':
                result.push('null')
                break
            case 'number':
                result.push(o)
                break
            case 'boolean':
                result.push(o)
                break
            case 'undefined':
                result.push('undefined')
                break
            default:
                throw "error: type not supported: " + (typeof o)
        }
    }
    my_json_helper(result, o, "\t", "data")
    
    if (appendAtEnd.length > 0) {
        result.unshift("(function () {\n\tvar data = ")
        result.push("\n")    
        result = result.concat(appendAtEnd)
        result.push("\treturn data\n})()")
    } else if (touched.length > 0) {
        result.unshift("(")
        result.push(")")
    }
    
    for (var i = 0; i < touched.length; i++) {
        delete touched[i].__temp_json_path
    }
    
    return result.join("")
}
json = my_json
try {
    if (Packages.MyUtil.Json.json('\t') == '"\\t"') {
        json = Packages.MyUtil.Json.json
    }
} catch (e) {
}

// adapted: http://snippets.dzone.com/posts/show/4349
function getXPath(node) {
    return "/" + getXPathHelper(node, []).join("/")
}
function getXPathHelper(node, path) {
        path = path || [];
        if(node.parentNode) {
          path = getXPathHelper(node.parentNode, path);
        }

        if(node.previousSibling) {
          var count = 1;
          var sibling = node.previousSibling
          do {
            if(sibling.nodeType == 1 && sibling.nodeName == node.nodeName) {count++;}
            sibling = sibling.previousSibling;
          } while(sibling);
          if(count == 1) {count = null;}
        } else if(node.nextSibling) {
          var sibling = node.nextSibling;
          do {
            if(sibling.nodeType == 1 && sibling.nodeName == node.nodeName) {
              var count = 1;
              sibling = null;
            } else {
              var count = null;
              sibling = sibling.previousSibling;
            }
          } while(sibling);
        }

        if(node.nodeType == 1) {
          path.push(node.nodeName.toLowerCase() + (count > 0 ? "["+count+"]" : ''));
        }
        return path;
      };


function escapeURL(s) {
    return encodeURIComponent(s)
}
escapeUrl = escapeURL
encodeUrl = escapeURL

function unescapeURL(s) {
    return decodeURIComponent(s)
}
unescapeUrl = unescapeURL
decodeUrl = unescapeURL

// from MonetDB JavaScript XRPC API
function serializeXML(xml) {
    try {
        var xmlSerializer = new window.XMLSerializer();
        return xmlSerializer.serializeToString(xml);
    } catch(e){
        try {
            return xml.xml;
        } catch(e){
            alert("Failed to create xmlSerializer or to serialize XML document:\n" + e);
        }
    }
}
    //xmlToString = serializeXML
    //~ XMLToString = serializeXML

// creates functions:
//      escapeXml
//      unescapeXml
(function () {
    escapeBraces = function (s) {
        return s.replace(/{/g, '{{').replace(/}/g, '}}')
    }
    escapeXml = function (s, _escapeBraces) {
        s = s.replace(/&/g, "&amp;")
        s = s.replace(/</g, "&lt;").
            replace(/>/g, "&gt;").
            replace(/'/g, "&apos;").
            replace(/"/g, "&quot;").
//            replace(/[\u0000-\u001F]|[\u0080-\uFFFF]/g, function (c) {
            replace(/[\u0080-\uFFFF]/g, function (c) {
                var code = c.charCodeAt(0)
                var hex = code.toString(16)
                return '&#' + hex + ';'
            })
        if (_escapeBraces) {
            s = escapeBraces(s)
        }
        return s;
    }
    unescapeXml = function (s) {
        return s.replace(/&[^;]+;/g, function (s) {
            switch(s.substring(1, s.length - 1)) {
                case "amp":  return "&";
                case "lt":   return "<";
                case "gt":   return ">";
                case "apos": return "'";
                case "quot": return '"';
                default:
                    if(s.charAt(1) == "#") {
                        return String.fromCharCode(parseInt(s.substring(2, s.length - 1)));
                    } else {
                        throw "unknown XML escape sequence: " + s
                    }
            }
        })
    }
    escapeXML = escapeXml
    escapeXPath = escapeXml
    escapeXQuery = escapeXml
    unescapeXML = unescapeXml
})()

function xpath(s, n) {
    if (!n) n = document
    if (n.nodeType == 9) {
        var doc = n
    } else {
        var doc = n.ownerDocument
    }
    var x = doc.evaluate(s, n, null, 0, null)
    var a = []
    while (true) {
    var b = x.iterateNext()
    if (!b) break
    a.push(b)
    }
    return a
}

function getXMLHttpRequest() {
    if (window.XMLHttpRequest) { 
        return new XMLHttpRequest()
    } else if (window.ActiveXObject) {
        return new ActiveXObject("Microsoft.XMLHTTP")
    }
    return null
}

function my_ajax(url, postParams, callback) {
    var async = (callback != null)
    var x = getXMLHttpRequest()
    
    function getReturnValue() {
        return x.responseText
        //return x.responseXML ? x.responseXML : x.responseText
    }
    x.onreadystatechange = function() {
        if (x.readyState == 4 && x.status == 200) {
            if (async)
                callback(getReturnValue())
        }
    }
    if (postParams) {
        var paramString = ""
        if ((typeof postParams) == "string") {
            paramString = postParams
        } else {
            paramString = []
            for (var k in postParams) {
                paramString.push(escapeURL(k) + "=" + escapeURL(postParams[k]))
            }
            paramString = paramString.join("&")        
        }
        
        x.open("POST", url, async)
        x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        x.setRequestHeader("Content-length", paramString.length);
        x.setRequestHeader("Connection", "close");
        x.send(paramString)
    } else {
        x.open("GET", url, async)
        x.send("")
    }
    if (!async) {
        return getReturnValue()
    }
}

function getURLParams() {
    var params = {}
    foreach(window.location.href.match(/[\\?&]([^=]+)=([^&#]*)/g), function (m) {
        var a= m.match(/.([^=]+)=(.*)/)
        params[decodeUrl(a[1])] = decodeUrl(a[2])
    })
    return params
}
getUrlParams = getURLParams

// from: http://www.netlobo.com/url_query_string_javascript.html
function getURLParam(name) {
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( window.location.href );
  if( results == null )
    return "";
  else
    return results[1];
}

parseXml_DOMParser = null
function parseXml(s) {
    if (!parseXml_DOMParser) {
        parseXml_DOMParser = new DOMParser()
    }
    return parseXml_DOMParser.parseFromString(s, "text/xml")
}
parseXML = parseXml

// these position function I got from somewhere, can't remember (found when looking for drag-n-drop stuff
function getPosition(e){
	var left = 0;
	var top  = 0;

	while (e.offsetParent){
		left += e.offsetLeft;
		top  += e.offsetTop;
		e     = e.offsetParent;
	}

	left += e.offsetLeft;
	top  += e.offsetTop;

	return {x:left, y:top};
}
function getPositionWithRespectTo(e, p){
    var ePos = getPosition(e)
    var pPos = getPosition(p)
    return {x: (ePos.x - pPos.x), y: (ePos.y - pPos.y)}
}

function distSq(a, b) {
    var dx = a.x - b.x
    var dy = a.y - b.y
    return (dx * dx) + (dy * dy)
}

function dist(a, b) {
    return Math.sqrt(distSq(a, b))
}

function lerp(t0, v0, t1, v1, t) {
    return (t - t0) * (v1 - v0) / (t1 - t0) + v0
}

function indexOf(array, element) {
    for (var i = 0; i < array.length; i++) {
        if (array[i] == element) return i;
    }
    return -1
}

function trim(s) {
    return s.replace(/^\s+|\s+$/g,"");
}
String.prototype.trim = function() {
    return trim(this)
}

function scrollToHorzCenterIn(thing, scrollParent) {
    var offsetParent = scrollParent.firstChild
    var pos = getPositionWithRespectTo(thing, offsetParent)
    var x = pos.x
    var w = thing.offsetWidth
    var mw = offsetParent.offsetWidth
    var v = scrollParent.offsetWidth
    
    scrollParent.scrollLeft = (x + (w / 2)) - (v / 2)
}

// from: http://lists.evolt.org/pipermail/javascript/2004-June/007409.html
function addCommas(someNum){
    while (someNum.match(/^\d\d{3}/)){
        someNum = someNum.replace(/(\d)(\d{3}(\.|,|$))/, '$1,$2');
    }
    return someNum;
}
         
/**
*
*  Javascript sprintf
*  http://www.webtoolkit.info/
*
*
**/
sprintfWrapper = {

    init : function () {

        if (typeof arguments == "undefined") { return null; }
        if (arguments.length < 1) { return null; }
        if (typeof arguments[0] != "string") { return null; }
        if (typeof RegExp == "undefined") { return null; }

        var string = arguments[0];
        var exp = new RegExp(/(%([%]|(\-)?(\+|\x20)?(0)?(\d+)?(\.(\d)?)?([bcdfosxX])))/g);
        var matches = new Array();
        var strings = new Array();
        var convCount = 0;
        var stringPosStart = 0;
        var stringPosEnd = 0;
        var matchPosEnd = 0;
        var newString = '';
        var match = null;

        while (match = exp.exec(string)) {
            if (match[9]) { convCount += 1; }

            stringPosStart = matchPosEnd;
            stringPosEnd = exp.lastIndex - match[0].length;
            strings[strings.length] = string.substring(stringPosStart, stringPosEnd);

            matchPosEnd = exp.lastIndex;
            matches[matches.length] = {
                match: match[0],
                left: match[3] ? true : false,
                sign: match[4] || '',
                pad: match[5] || ' ',
                min: match[6] || 0,
                precision: match[8],
                code: match[9] || '%',
                negative: parseInt(arguments[convCount]) < 0 ? true : false,
                argument: String(arguments[convCount])
            };
        }
        strings[strings.length] = string.substring(matchPosEnd);

        if (matches.length == 0) { return string; }
        if ((arguments.length - 1) < convCount) { return null; }

        var code = null;
        var match = null;
        var i = null;

        for (i=0; i<matches.length; i++) {

            if (matches[i].code == '%') { substitution = '%' }
            else if (matches[i].code == 'b') {
                matches[i].argument = String(Math.abs(parseInt(matches[i].argument)).toString(2));
                substitution = sprintfWrapper.convert(matches[i], true);
            }
            else if (matches[i].code == 'c') {
                matches[i].argument = String(String.fromCharCode(parseInt(Math.abs(parseInt(matches[i].argument)))));
                substitution = sprintfWrapper.convert(matches[i], true);
            }
            else if (matches[i].code == 'd') {
                matches[i].argument = String(Math.abs(parseInt(matches[i].argument)));
                substitution = sprintfWrapper.convert(matches[i]);
            }
            else if (matches[i].code == 'f') {
                matches[i].argument = String(Math.abs(parseFloat(matches[i].argument)).toFixed(matches[i].precision ? matches[i].precision : 6));
                substitution = sprintfWrapper.convert(matches[i]);
            }
            else if (matches[i].code == 'o') {
                matches[i].argument = String(Math.abs(parseInt(matches[i].argument)).toString(8));
                substitution = sprintfWrapper.convert(matches[i]);
            }
            else if (matches[i].code == 's') {
                matches[i].argument = matches[i].argument.substring(0, matches[i].precision ? matches[i].precision : matches[i].argument.length)
                substitution = sprintfWrapper.convert(matches[i], true);
            }
            else if (matches[i].code == 'x') {
                matches[i].argument = String(Math.abs(parseInt(matches[i].argument)).toString(16));
                substitution = sprintfWrapper.convert(matches[i]);
            }
            else if (matches[i].code == 'X') {
                matches[i].argument = String(Math.abs(parseInt(matches[i].argument)).toString(16));
                substitution = sprintfWrapper.convert(matches[i]).toUpperCase();
            }
            else {
                substitution = matches[i].match;
            }

            newString += strings[i];
            newString += substitution;

        }
        newString += strings[i];

        return newString;

    },

    convert : function(match, nosign){
        if (nosign) {
            match.sign = '';
        } else {
            match.sign = match.negative ? '-' : match.sign;
        }
        var l = match.min - match.argument.length + 1 - match.sign.length;
        var pad = new Array(l < 0 ? 0 : l).join(match.pad);
        if (!match.left) {
            if (match.pad == "0" || nosign) {
                return match.sign + pad + match.argument;
            } else {
                return pad + match.sign + match.argument;
            }
        } else {
            if (match.pad == "0" || nosign) {
                return match.sign + match.argument + pad.replace(/0/g, ' ');
            } else {
                return match.sign + match.argument + pad;
            }
        }
    }
}
sprintf = sprintfWrapper.init;

/* JSONPath 0.8.0 - XPath for JSON
 *
 * Copyright (c) 2007 Stefan Goessner (goessner.net)
 * Licensed under the MIT (MIT-LICENSE.txt) licence.
 */
function jsonPath(obj, expr, arg) {
   var P = {
      resultType: arg && arg.resultType || "VALUE",
      result: [],
      normalize: function(expr) {
         var subx = [];
         return expr.replace(/[\['](\??\(.*?\))[\]']/g, function($0,$1){return "[#"+(subx.push($1)-1)+"]";})
                    .replace(/'?\.'?|\['?/g, ";")
                    .replace(/;;;|;;/g, ";..;")
                    .replace(/;$|'?\]|'$/g, "")
                    .replace(/#([0-9]+)/g, function($0,$1){return subx[$1];});
      },
      asPath: function(path) {
         var x = path.split(";"), p = "$";
         for (var i=1,n=x.length; i<n; i++)
            p += /^[0-9*]+$/.test(x[i]) ? ("["+x[i]+"]") : ("['"+x[i]+"']");
         return p;
      },
      store: function(p, v) {
         if (p) P.result[P.result.length] = P.resultType == "PATH" ? P.asPath(p) : v;
         return !!p;
      },
      trace: function(expr, val, path) {
         if (expr) {
            var x = expr.split(";"), loc = x.shift();
            x = x.join(";");
            if (val && val.hasOwnProperty(loc))
               P.trace(x, val[loc], path + ";" + loc);
            else if (loc === "*")
               P.walk(loc, x, val, path, function(m,l,x,v,p) { P.trace(m+";"+x,v,p); });
            else if (loc === "..") {
               P.trace(x, val, path);
               P.walk(loc, x, val, path, function(m,l,x,v,p) { typeof v[m] === "object" && P.trace("..;"+x,v[m],p+";"+m); });
            }
            else if (/,/.test(loc)) { // [name1,name2,...]
               for (var s=loc.split(/'?,'?/),i=0,n=s.length; i<n; i++)
                  P.trace(s[i]+";"+x, val, path);
            }
            else if (/^\(.*?\)$/.test(loc)) // [(expr)]
               P.trace(P.eval(loc, val, path.substr(path.lastIndexOf(";")+1))+";"+x, val, path);
            else if (/^\?\(.*?\)$/.test(loc)) // [?(expr)]
               P.walk(loc, x, val, path, function(m,l,x,v,p) { if (P.eval(l.replace(/^\?\((.*?)\)$/,"$1"),v[m],m)) P.trace(m+";"+x,v,p); });
            else if (/^(-?[0-9]*):(-?[0-9]*):?([0-9]*)$/.test(loc)) // [start:end:step]  phyton slice syntax
               P.slice(loc, x, val, path);
         }
         else
            P.store(path, val);
      },
      walk: function(loc, expr, val, path, f) {
         if (val instanceof Array) {
            for (var i=0,n=val.length; i<n; i++)
               if (i in val)
                  f(i,loc,expr,val,path);
         }
         else if (typeof val === "object") {
            for (var m in val)
               if (val.hasOwnProperty(m))
                  f(m,loc,expr,val,path);
         }
      },
      slice: function(loc, expr, val, path) {
         if (val instanceof Array) {
            var len=val.length, start=0, end=len, step=1;
            loc.replace(/^(-?[0-9]*):(-?[0-9]*):?(-?[0-9]*)$/g, function($0,$1,$2,$3){start=parseInt($1||start);end=parseInt($2||end);step=parseInt($3||step);});
            start = (start < 0) ? Math.max(0,start+len) : Math.min(len,start);
            end   = (end < 0)   ? Math.max(0,end+len)   : Math.min(len,end);
            for (var i=start; i<end; i+=step)
               P.trace(i+";"+expr, val, path);
         }
      },
      eval: function(x, _v, _vname) {
         try { return $ && _v && eval(x.replace(/@/g, "_v")); }
         catch(e) { throw new SyntaxError("jsonPath: " + e.message + ": " + x.replace(/@/g, "_v").replace(/\^/g, "_a")); }
      }
   };

   var $ = obj;
   if (expr && obj && (P.resultType == "VALUE" || P.resultType == "PATH")) {
      P.trace(P.normalize(expr).replace(/^\$;/,""), obj, "$");
      return P.result.length ? P.result : false;
   }
} 
