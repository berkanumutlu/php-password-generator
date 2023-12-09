<?php
require 'Password.php';

if (!empty($_POST['generatePassword'])) {
    $response = ['status' => false];
    try {
        $password = new Password();
        $password->setLength(isset($_POST['length']) ? $_POST['length'] : 16);
        $password->setUseLowercaseCharacters(isset($_POST['useLowercase']));
        $password->setUseUppercaseCharacters(isset($_POST['useUppercase']));
        $password->setUseDigits(isset($_POST['useDigits']));
        $password->setUseSymbols(isset($_POST['useSymbols']));
        $password->setAvoidSimilarCharacters(isset($_POST['avoidSimilarCharacters']));
        $password->setAvoidAmbiguousCharacters(isset($_POST['avoidAmbiguousCharacters']));
        $password->generate();
        if ($password->issetPassword()) {
            $response['status'] = true;
            $response['data'] = $password->getPassword();
        }
    } catch (\Exception $e) {
        $response['message'] = $e->getMessage();
    }
    echo json_encode($response);
    return true;
}