<?php

/*
 * This file is part of the rcdesign/fluid-styled-content-custom-css package.
 *
 * Copyright (C) 2025  rc design visual concepts <https://rc-design.at>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Rcdesign\RcdFscCustomCss\Form\Element;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CssFieldElement extends AbstractFormElement
{
    public function render(): array
    {
        $parameterArray = $this->data['parameterArray'];
        $color = $parameterArray['fieldConf']['config']['parameters']['color'];
        $size = $parameterArray['fieldConf']['config']['parameters']['size'];

        $fieldInformationResult = $this->renderFieldInformation();
        $fieldInformationHtml = $fieldInformationResult['html'];
        $resultArray = $this->mergeChildReturnIntoExistingResult($this->initializeResultArray(), $fieldInformationResult, false);

        $fieldId = uniqid('formengine-textarea-', true);

        $attributes = [
            'id' => $fieldId,
            'name' => htmlspecialchars($parameterArray['itemFormElName']),
            'size' => $size,
            'class' => 'form-control t3js-formengine-textarea formengine-textarea',
            'data-formengine-input-name' => htmlspecialchars($parameterArray['itemFormElName']),
        ];

        $itemValue = $parameterArray['itemFormElValue'];

        $html = [];
        $html[] = $this->renderLabel($fieldId);
        $html[] = '<div class="formengine-field-item t3js-formengine-field-item" style="padding: 5px; background-color: ' . htmlspecialchars($color) . ';">';
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
