###TYPO3-Extbase-Fluid-Ajax-POST-GET-Example
=========================================

Simple extension for testing POST/GET values with Ajax

Depends on TYPO3 6.2<<

jQuery must be included<<

####1.Step 
Upload Extension

####2.Step
Install extension in the TYPO3 extensionmanager

####3.Step 
Create a new page type in your root template (setup.ts)

Example code:
```
/*Define new page type*/  
ajax_test = PAGE
ajax_test{
typeNum = 100
10 < tt_content.list.20.deajaxpost_ajaxshow
config{
disableAllHeaderCode = 1
/*Choose your header type (json or text/plain)*/
/*additionalHeaders = Content-type:application/json*/
additionalHeaders = Content-type: text/plain
xhtml_cleaning = 0
no_cache = 1
debug = 0
  }
}
```

###4.Step
Insert extension as contentelement in your testpage

###5.Step
have fun ;)
