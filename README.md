## Gulp Susy Breakpoint Globbing Starter 

  
### First you need to setup node on your "server"
```
curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.31.0/install.sh | bash
```

### Look Here for how to set up Node Version Manager
https://github.com/creationix/nvm

Specifically
In place of a version pointer like "0.10" or "5.0" or "4.2.1", you can use the following special default aliases with 

```
nvm install
```

```
nvm use
```
```
nvm run
```
```
nvm exec
```
```
nvm which
```
## Using these options...
```
node: this installs the latest version of node
iojs: this installs the latest version of io.js
stable: this alias is deprecated, and only truly applies to node v0.12 and earlier. Currently, this is an alias for node.
unstable: this alias points to node v0.11 - the last "unstable" node release, since post-1.0, all node versions are stable. (in semver, versions communicate breakage, not stability).
```

## Project Setup
1. Clone the repo 

~~~
git clone https://github.com/bradallenfisher/gulp-susy-breakpoint-globbing.git
~~~

2. Install Node dependencies 

~~~
$ npm install
~~~

3. Install Bower dependencies

~~~
$ bower install
~~~

## Usage 

The gruntfile in this project is setup to run `gulp-sass` and to watch the scss file for changes. Use the `gulp` command to start the process. 

~~~
$ gulp
~~~

That's it!
