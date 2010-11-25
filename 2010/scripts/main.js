var sections = [
    {   link:   "true-index.html",
        title:  "home"
    },
    {},
    {   link:   "lectures/index.html",
        title:  "lectures"
    },
    {   link:   "challenge/index.html",
        title:  "challenge"
    },
];

function onLoad(urlPrefix, urlOverride) {
    urlPrefix = (typeof urlPrefix == "string") ? urlPrefix : "";
    
    var currentSectionIndex = 0;
    var url = document.location.href;
    if (urlOverride) {
        url = urlOverride
    }
    for (var i = 0; i < sections.length; i++) {
        var section = sections[i];
        if ("link" in section && url.indexOf(section.link) > 0) {
            currentSectionIndex = i;
        }
    }
    
    var div = document.getElementById("sidebar-link-container");
    for (var i = 0; i < sections.length; i++) {
        var section = sections[i];
        if (!("link" in section)) {
            var elmt = document.createElement("div");
            elmt.className = "sidebar-break";
            div.appendChild(elmt);
        } else if (i == currentSectionIndex) {
            var elmt = document.createElement("a");
            elmt.className = "sidebar-link-selected";
            elmt.innerHTML = section.title;
            div.appendChild(elmt);
        } else {
            var elmt = document.createElement("a");
            elmt.className = "sidebar-link";
            elmt.href = urlPrefix + section.link;
            elmt.innerHTML = section.title;
            div.appendChild(elmt);
        }
    }
}
