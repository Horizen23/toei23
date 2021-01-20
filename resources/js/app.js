var Chart = require('chart.js');
var jwt = require('jsonwebtoken');
var token = jwt.sign({
    exp: Math.floor(Date.now() / 1000) + (60 * 60),
    data: 'foobar'
  }, 'secret');
console.log(token)
var decoded = jwt.verify(token, 'secret');
console.log(decoded.foo) // bar


require('./script.js')