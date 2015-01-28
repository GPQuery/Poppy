`GPQuery\Poppy`
===============

Description
-----------

Propagatrix Soiree de Papaveraceae.

This web application is written in AngularJS for #f1.




## Directory Structure
```
├── api/                                  --> 
│   └── parse-playlist/                   --> M3U Parser API (BETA)
│       ├── config.php                    --> Configuration File
│       ├── index.php                     --> Main Script File
│       └── playlist.m3u                  --> Schedule M3U Playlist
├── app/                                  --> Angular Application Files
│   ├── core/                             --> Core Module
│   │   ├── core.module.js                --> Intra-App/3rd-Party Dependencies
│   │   └── core.service.js               --> Core Data Service
│   ├── page/                             --> Page Component Modules
│   │   ├── navbar/
│   │   │   └── navbar.html
│   │   ├── panels/
│   │   │   ├── announce.html
│   │   │   ├── donation.html
│   │   │   ├── schedule.html
│   │   │   └── webchat.html
│   │   ├── stream/
│   │   │   └── stream.html
│   │   ├── page.controller.js
│   │   └── page.module.js
│   └── app.module.js                     --> Main Application Module
├── assets/
│   ├── images/
│   │   ├── brand.png
│   │   └── favicon.png
│   └── styles/
│       ├── app.css
│       ├── bootstrap.min.css
│       └── bootstrap-theme.min.css
├── config/                               --> Front-End Configuration
│   ├── announce.html                     --> Announcement Tags
│   ├── chat.html                         --> WebIRC IFrame
│   ├── status.html                       --> Stream Status
│   ├── stream.html                       --> Video IFrame
│   └── stream_https.html
├── .gitignore
├── bower.json                            --> bower manifest
├── favicon.ico                           --> Favicon
├── index.html                            --> Application Index
├── package.json                          --> npm manifest
└── README.md                             --> dis fiel.

```

## Development Process
In adherence with [Semantic Versioning 2.0.0][semver]



[semver]:http://semver.org

---