<?php

namespace Rcdesign\RcdFscCustomCss\Form\Element;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\StringUtility;

class CssFieldElement extends AbstractFormElement
{
    public function render(): array
    {
        $row = $this->data['databaseRow'];
        $parameterArray = $this->data['parameterArray'];
        $color = $parameterArray['fieldConf']['config']['parameters']['color'];
        $size = $parameterArray['fieldConf']['config']['parameters']['size'];

        $fieldInformationResult = $this->renderFieldInformation();
        $fieldInformationHtml = $fieldInformationResult['html'];
        $resultArray = $this->mergeChildReturnIntoExistingResult($this->initializeResultArray(), $fieldInformationResult, false);

        $fieldId = StringUtility::getUniqueId('formengine-textarea-');

        $attributes = [
            'id' => $fieldId,
            'name' => htmlspecialchars($parameterArray['itemFormElName']),
            'size' => $size,
            'data-formengine-input-name' => htmlspecialchars($parameterArray['itemFormElName']),
        ];
        $classes = [
            'form-control',
            't3js-formengine-textarea',
            'formengine-textarea',
        ];
        $itemValue = $parameterArray['itemFormElValue'];
        $attributes['class'] = implode(' ', $classes);

        $html = [];
        $versionInformation = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
        if ($versionInformation->getMajorVersion() > 12) {
            $html[] = $this->renderLabel($fieldId);
        }
        $html[] = '<div class="formengine-field-item t3js-formengine-field-item" style="padding: 5px; background-color: ' . $color . ';">';
        $html[] = $fieldInformationHtml;
        $html[] =   '<div class="form-wizards-wrap">';
        $html[] =      '<div class="form-wizards-element">';
        $html[] =         '<div class="form-control-wrap">';
        $html[] =            '<input type="text" value="' . htmlspecialchars($itemValue, ENT_QUOTES) . '" ';
        $html[] =               GeneralUtility::implodeAttributes($attributes, true);
        $html[] =            ' />';
        $html[] =         '</div>';
        $html[] =      '</div>';
        $html[] =   '</div>';
        $html[] = '</div>';
        $resultArray['html'] = implode(LF, $html);

        return $resultArray;
    }
}
