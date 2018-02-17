define([], function(){
    var moduleObject = {};
    moduleObject.getMessage = function(){
        return "Hello RequireJS Custom Module";
    };
    return moduleObject;
});