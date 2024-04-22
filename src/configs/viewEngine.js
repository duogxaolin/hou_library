import express from "express";
// import { createServer } from "http";
/** 
 * @param {*} app -express app instance
 **/
const configViewEngine = (app) => {
    app.use(express.static('./src/public'));
    app.set("view engine", "ejs");
    app.set("views", "./src/views");

}
export default configViewEngine;