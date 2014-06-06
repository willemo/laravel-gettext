<?php

namespace Xinax\LaravelGettext\Config\Models;

class Config{

	/**
	 * Charset encoding for files (UTF-8)
	 * @type
	 */
	protected $encoding = 'UTF-8';

	/**
	 * Full ISO Locale (en_EN)
	 * @type String
	 */
	protected $locale;

	/**
	 * Fallback locale
	 * @type String
	 */
	protected $fallbackLocale;

    /**
     * Supported locales
     * @type Array
     */
    protected $supportedLocales = array();

    /**
     * Gettext domain
     * @type String
     */
    protected $domain;

    /**
     * Path to translation files
     * @type String
     */
    protected $translationsPath;

    /**
     * Gets the Charset encoding for files (UTF-8).
     * @return mixed
     */
    public function getEncoding(){
        return $this->encoding;
    }

    /**
     * Sets the Charset encoding for files (UTF-8).
     * @param mixed $encoding the encoding
     * @return self
     */
    public function setEncoding($encoding){
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Gets the Full ISO Locale (en_EN).
     * @return mixed
     */
    public function getLocale(){
        return $this->locale;
    }

    /**
     * Sets the Full ISO Locale (en_EN).
     * @param mixed $locale the locale
     * @return self
     */
    public function setLocale($locale){
        $this->locale = $locale;
        return $this;
    }

    /**
     * Gets the Fallback locale.
     * @return mixed
     */
    public function getFallbackLocale(){
        return $this->fallbackLocale;
    }

    /**
     * Sets the Fallback locale.
     * @param mixed $fallbackLocale the fallback locale
     * @return self
     */
    public function setFallbackLocale($fallbackLocale){
        $this->fallbackLocale = $fallbackLocale;
        return $this;
    }

    /**
     * Gets the Supported locales.
     * @return mixed
     */
    public function getSupportedLocales(){
        return $this->supportedLocales;
    }

    /**
     * Sets the Supported locales.
     * @param mixed $supportedLocales the supported locales
     * @return self
     */
    public function setSupportedLocales($supportedLocales){
        $this->supportedLocales = $supportedLocales;
        return $this;
    }

    /**
     * Gets the Gettext domain.
     * @return mixed
     */
    public function getDomain(){
        return $this->domain;
    }

    /**
     * Sets the Gettext domain.
     * @param mixed $domain the domain
     * @return self
     */
    public function setDomain($domain){
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets the Path to translation files.
     * @return mixed
     */
    public function getTranslationsPath(){
        return $this->translationsPath;
    }

    /**
     * Sets the Path to translation files.
     * @param mixed $translationsPath the translations path
     * @return self
     */
    public function setTranslationsPath($translationsPath){
        $this->translationsPath = $translationsPath;
        return $this;
    }

}