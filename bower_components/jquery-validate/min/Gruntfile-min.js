module.exports=function(t){"use strict";var e,s,n,i,a,r,o;e="/*!\n * jQuery Validation Plugin v<%= pkg.version %>\n *\n * <%= pkg.homepage %>\n *\n * Copyright (c) <%= grunt.template.today('yyyy') %> <%= pkg.author.name %>\n * Released under the <%= _.pluck(pkg.licenses, 'type').join(', ') %> license\n */\n",s='(function( factory ) {\n	if ( typeof define === "function" && define.amd ) {\n',n="	} else {\n		factory( jQuery );\n	}\n}(function( $ ) {\n\n",i="\n}));",a='		define( ["jquery"], factory );\n',r='		define( ["jquery", "./jquery.validate"], factory );\n',o='		define( ["jquery", "../jquery.validate"], factory );\n',t.initConfig({pkg:t.file.readJSON("package.json"),concat:{dist:{options:{banner:e+s+a+n,footer:i},files:{"dist/jquery.validate.js":["src/core.js","src/*.js"]}},extra:{options:{banner:e+s+r+n,footer:i},files:{"dist/additional-methods.js":["src/additional/additional.js","src/additional/*.js"]}}},uglify:{options:{preserveComments:!1,banner:"/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - <%= grunt.template.today('m/d/yyyy') %>\n * <%= pkg.homepage %>\n * Copyright (c) <%= grunt.template.today('yyyy') %> <%= pkg.author.name %>; Licensed <%= _.pluck(pkg.licenses, 'type').join(', ') %> */\n"},dist:{files:{"dist/additional-methods.min.js":"dist/additional-methods.js","dist/jquery.validate.min.js":"dist/jquery.validate.js"}},all:{expand:!0,cwd:"dist/localization",src:"**/*.js",dest:"dist/localization",ext:".min.js"}},compress:{dist:{options:{mode:"zip",level:1,archive:"dist/<%= pkg.name %>-<%= pkg.version %>.zip",pretty:!0},src:["changelog.txt","demo/**/*.*","dist/**/*.js","Gruntfile.js","lib/**/*.*","package.json","README.md","src/**/*.*","test/**/*.*"]}},qunit:{files:"test/index.html"},jshint:{options:{jshintrc:!0},core:{src:"src/**/*.js"},test:{src:"test/*.js"},grunt:{src:"Gruntfile.js"}},watch:{options:{atBegin:!0},src:{files:"<%= jshint.core.src %>",tasks:["concat"]}},jscs:{all:["<%= jshint.core.src %>","<%= jshint.test.src %>","<%= jshint.grunt.src %>"]},copy:{dist:{options:{process:function(t){return s+o+n+t+i}},src:"src/localization/*",dest:"dist/localization",expand:!0,flatten:!0,filter:"isFile"}},replace:{dist:{src:"dist/**/*.min.js",overwrite:!0,replacements:[{from:"./jquery.validate",to:"./jquery.validate.min"}]}}}),t.loadNpmTasks("grunt-contrib-jshint"),t.loadNpmTasks("grunt-contrib-qunit"),t.loadNpmTasks("grunt-contrib-uglify"),t.loadNpmTasks("grunt-contrib-concat"),t.loadNpmTasks("grunt-contrib-compress"),t.loadNpmTasks("grunt-contrib-watch"),t.loadNpmTasks("grunt-jscs"),t.loadNpmTasks("grunt-contrib-copy"),t.loadNpmTasks("grunt-text-replace"),t.registerTask("default",["concat","copy","jscs","jshint","qunit"]),t.registerTask("release",["default","uglify","replace","compress"]),t.registerTask("start",["concat","watch"])};