const home = (req, res) => {
    return res.render("home.ejs");
}

const pages = (req, res) => {
    return res.render("user/home.ejs");
}

module.exports = {
    home,
    pages
}