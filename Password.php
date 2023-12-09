<?php

class Password
{
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $lowercaseCharacters = 'abcdefghijkmnpqorstuvwxyz';
    /**
     * @var string
     */
    private $uppercaseCharacters = 'ABCDEFGHIJKMNPQORSTUVWXYZ';
    /**
     * @var string
     */
    private $ambiguousCharacters = '{}[]()\/\'\"`~,;:.<>\\';
    /**
     * @var string
     */
    private $similarCharacters = 'il1Lo0O';
    /**
     * @var string
     */
    private $digits = '0123456789';
    /**
     * @var string
     */
    private $symbols = '!#$%&*+-=?@^_-';
    /**
     * @var int
     */
    private $length = 8;
    /**
     * @var bool
     */
    private $useDigits = false;
    /**
     * @var bool
     */
    private $useLowercaseCharacters = false;
    /**
     * @var bool
     */
    private $useUppercaseCharacters = false;
    /**
     * @var bool
     */
    private $useSymbols = false;
    /**
     * @var bool
     */
    private $avoidSimilarCharacters = false;
    /**
     * @var bool
     */
    private $avoidAmbiguousCharacters = false;

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param  string  $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getLowercaseCharacters()
    {
        return $this->lowercaseCharacters;
    }

    /**
     * @param  string  $lowercaseCharacters
     */
    public function setLowercaseCharacters($lowercaseCharacters)
    {
        $this->lowercaseCharacters = $lowercaseCharacters;
    }

    /**
     * @return string
     */
    public function getUppercaseCharacters()
    {
        return $this->uppercaseCharacters;
    }

    /**
     * @param  string  $uppercaseCharacters
     */
    public function setUppercaseCharacters($uppercaseCharacters)
    {
        $this->uppercaseCharacters = $uppercaseCharacters;
    }

    /**
     * @return string
     */
    public function getAmbiguousCharacters()
    {
        return $this->ambiguousCharacters;
    }

    /**
     * @param  string  $ambiguousCharacters
     */
    public function setAmbiguousCharacters($ambiguousCharacters)
    {
        $this->ambiguousCharacters = $ambiguousCharacters;
    }

    /**
     * @return string
     */
    public function getSimilarCharacters()
    {
        return $this->similarCharacters;
    }

    /**
     * @param  string  $similarCharacters
     */
    public function setSimilarCharacters($similarCharacters)
    {
        $this->similarCharacters = $similarCharacters;
    }

    /**
     * @return string
     */
    public function getDigits()
    {
        return $this->digits;
    }

    /**
     * @param  string  $digits
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
    }

    /**
     * @return string
     */
    public function getSymbols()
    {
        return $this->symbols;
    }

    /**
     * @param  string  $symbols
     */
    public function setSymbols($symbols)
    {
        $this->symbols = $symbols;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param  int  $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return bool
     */
    public function isUseDigits()
    {
        return $this->useDigits;
    }

    /**
     * @param  bool  $useDigits
     */
    public function setUseDigits($useDigits)
    {
        $this->useDigits = $useDigits;
    }

    /**
     * @return bool
     */
    public function isUseLowercaseCharacters()
    {
        return $this->useLowercaseCharacters;
    }

    /**
     * @param  bool  $useLowercaseCharacters
     */
    public function setUseLowercaseCharacters($useLowercaseCharacters)
    {
        $this->useLowercaseCharacters = $useLowercaseCharacters;
    }

    /**
     * @return bool
     */
    public function isUseUppercaseCharacters()
    {
        return $this->useUppercaseCharacters;
    }

    /**
     * @param  bool  $useUppercaseCharacters
     */
    public function setUseUppercaseCharacters($useUppercaseCharacters)
    {
        $this->useUppercaseCharacters = $useUppercaseCharacters;
    }

    /**
     * @return bool
     */
    public function isUseSymbols()
    {
        return $this->useSymbols;
    }

    /**
     * @param  bool  $useSymbols
     */
    public function setUseSymbols($useSymbols)
    {
        $this->useSymbols = $useSymbols;
    }

    /**
     * @return bool
     */
    public function isAvoidSimilarCharacters()
    {
        return $this->avoidSimilarCharacters;
    }

    /**
     * @param  bool  $avoidSimilarCharacters
     */
    public function setAvoidSimilarCharacters($avoidSimilarCharacters)
    {
        $this->avoidSimilarCharacters = $avoidSimilarCharacters;
    }

    /**
     * @return bool
     */
    public function isAvoidAmbiguousCharacters()
    {
        return $this->avoidAmbiguousCharacters;
    }

    /**
     * @param  bool  $avoidAmbiguousCharacters
     */
    public function setAvoidAmbiguousCharacters($avoidAmbiguousCharacters)
    {
        $this->avoidAmbiguousCharacters = $avoidAmbiguousCharacters;
    }

    /**
     * @return bool
     */
    public function issetPassword()
    {
        return isset($this->password);
    }

    /**
     * @return object
     */
    public function getDataSet()
    {
        $password = new Password();
        return (object) [
            'lowercaseCharacters' => $password->getLowercaseCharacters(),
            'uppercaseCharacters' => $password->getUppercaseCharacters(),
            'ambiguousCharacters' => $password->getAmbiguousCharacters(),
            'similarCharacters'   => $password->getSimilarCharacters(),
            'digits'              => $password->getDigits(),
            'symbols'             => $password->getSymbols()
        ];
    }

    /**
     * @return void
     */
    public function generate()
    {
        $length = $this->getLength();
        $props = [];
        if ($this->isUseLowercaseCharacters()) {
            $props[] = str_split($this->getLowercaseCharacters());
        }
        if ($this->isUseUppercaseCharacters()) {
            $props[] = str_split($this->getUppercaseCharacters());
        }
        if ($this->isUseDigits()) {
            $props[] = str_split($this->getDigits());
        }
        if ($this->isUseSymbols()) {
            $props[] = str_split($this->getSymbols());
        }
        if ($this->isAvoidAmbiguousCharacters()) {
            $props[] = str_split($this->getAmbiguousCharacters());
        }
        if ($this->isAvoidSimilarCharacters() && $this->getSimilarCharacters()) {
            $similarCharacters = str_split($this->getSimilarCharacters());
            foreach ($similarCharacters as $item) {
                foreach ($props as $key => $value) {
                    $props[$key] = str_replace($item, '', $value);
                }
            }
        }
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $randomProp = array_rand($props);
            $randomElement = array_rand($props[$randomProp]);
            $randomVal = $props[$randomProp][$randomElement];
            $password .= $randomVal;
        }
        $this->setPassword($password);
    }
}