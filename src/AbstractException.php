<?php
/**
 * Novutec Domain Tools.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Novutec
 *
 * @copyright  Copyright (c) 2007 - 2013 Novutec Inc. (http://www.novutec.com)
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */

/**
 * @namespace Novutec\DomainParser
 */
namespace Novutec\DomainParser;

/**
 * AbstractException.
 *
 * @category   Novutec
 *
 * @copyright  Copyright (c) 2007 - 2013 Novutec Inc. (http://www.novutec.com)
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 *
 * @deprecated
 */
abstract class AbstractException extends \Exception
{
    /**
     * Creates an exception object.
     *
     * @param string    $type
     * @param string    $message
     * @param int       $code
     * @param Exception $previous
     *
     * @return mixed
     */
    public static function factory($type = '', $message = '', $code = 0, Exception $previous = null)
    {
        $classname = 'Novutec\DomainParser\Exception\\'.ucfirst($type).'Exception';
        if (class_exists($classname)) {
            return new $classname($message, $code, $previous);
        }

        return new Exception($message, $code, $previous);
    }
}
