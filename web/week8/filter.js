let fs = require('fs');
let path = require('path');

module.exports = function(directory, fileExtension, callback) {
    fs.readdir(directory, (error, data) => {
        if(error) {
            return callback(error);
        }

        const filteredFiles = data.filter((file) => {
            return path.extname(file) === '.' + fileExtension;
        });

        callback(null, filteredFiles);
    });
};