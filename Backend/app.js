//jshint esversion:6

const express = require("express");
const bodyParser = require("body-parser");
const mongoose = require("mongoose");
const _ = require("lodash");

const app = express();

app.set('view engine', 'ejs');

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static("public"));


mongoose.connect("mongodb+srv://admin-breezy:26inIL0RLvtHC5Ah@cluster0-nr3qq.mongodb.net/mentorxDB", { useNewUrlParser: true, useUnifiedTopology: true });

app.get("/", function(req,res){
	res.render("splash");
});

app.get("/login", function(req,res){
	res.render("login");
});

app.get("/homepage", function(req,res){
	res.render("HomePage");
});



let port = process.env.PORT;
	if (port == null || port =="") {
		port = 3000;
	};

app.listen(port, function() {
    console.log("Server started successfully");
});


