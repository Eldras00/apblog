<?php
function classAutoLoader($className) {
    include_once "./classes/" . $className . ".php";
}