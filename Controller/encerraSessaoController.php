<?php
session_start();
session_destroy();

header("Location: ../views/paginaInicial.php");
