import express from "express";
import homeController from "../controller/ControllerHome";
import AuthController from "../controller/ControllerAuth";
const router = express.Router();

/**
 * 
 * @param {*} app : express app
 */

const initWebRouters = (app) => {

    router.get('/', homeController.home);
    router.get('/login', AuthController.AuthLogin);
    router.post('/login', AuthController.AuthLogin);

    // wwebsite start
    return app.use('/', router);
}

export default initWebRouters;