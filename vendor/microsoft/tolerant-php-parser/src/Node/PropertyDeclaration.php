<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Microsoft\PhpParser\Node;

use Microsoft\PhpParser\ModifiedTypeInterface;
use Microsoft\PhpParser\ModifiedTypeTrait;
use Microsoft\PhpParser\Node;
use Microsoft\PhpParser\Token;

class PropertyDeclaration extends Node implements ModifiedTypeInterface {
    use ModifiedTypeTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token|null question token for PHP 7.4 type declaration */
    public $questionToken;

    /** @var QualifiedName|Token|null */
    public $typeDeclaration;

    /**
     * @var DelimitedList\QualifiedNameList|null
     * TODO: Unify with typeDeclaration in a future backwards incompatible release
     */
    public $otherTypeDeclarations;

    /** @var DelimitedList\ExpressionList */
    public $propertyElements;

    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'attributes',
        'modifiers',
        'questionToken',
        'typeDeclaration',
        'otherTypeDeclarations',
        'propertyElements',
        'semicolon'
    ];
}
