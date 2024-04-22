import express from "express";
require("dotenv").config();
import configViewEngine from "./configs/viewEngine";
import initWebRouters from "./routers/web";

const app = express();

//config view   engine
configViewEngine(app);

//init web router
initWebRouters(app);

//set up port
const PORT = process.env.PORT || 80;
app.listen(PORT, () => {
    console.log('listening on port run ', +PORT);
})