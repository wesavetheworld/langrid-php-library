<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tetsu
 * Date: 12/01/15
 * Time: 15:40
 * To change this template use File | Settings | File Templates.
 */
require_once dirname(__FILE__).'/ServiceClient.interface.php';
require_once dirname(__FILE__).'/../commons/Language.php';

interface TextSummarizationClient extends ServiceClient {

    /*
     * @param lang: 対象言語
     * @param text: 要約する文
     * @return string 要約結果
     */
    public function summarize(Language $language, /*String*/ $text);
    
    
     /*
     * @return Array<String> 対応言語
     */
    public function getSupportedLanguages();
}