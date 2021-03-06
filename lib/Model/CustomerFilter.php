<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CustomerFilter Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CustomerFilter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'creation_source' => '\SquareConnect\Model\CustomerCreationSourceFilter',
        'created_at' => '\SquareConnect\Model\TimeRange',
        'updated_at' => '\SquareConnect\Model\TimeRange',
        'group_ids' => '\SquareConnect\Model\FilterValue'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'creation_source' => 'creation_source',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'group_ids' => 'group_ids'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'creation_source' => 'setCreationSource',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'group_ids' => 'setGroupIds'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'creation_source' => 'getCreationSource',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'group_ids' => 'getGroupIds'
    );
  
    /**
      * $creation_source A filter to select customers based on their creation source.
      * @var \SquareConnect\Model\CustomerCreationSourceFilter
      */
    protected $creation_source;
    /**
      * $created_at A filter to select customers based on when they were created.
      * @var \SquareConnect\Model\TimeRange
      */
    protected $created_at;
    /**
      * $updated_at A filter to select customers based on when they were updated.
      * @var \SquareConnect\Model\TimeRange
      */
    protected $updated_at;
    /**
      * $group_ids A filter to select customers based on their group membership.  The `group_ids` is a JSON object of the following general format: ``` \"group_ids\": { \"any\":  [\"{group_a_id}\", \"{group_b_id}\", ...], \"all\":  [\"{group_1_id}\", \"{group_2_id}\", ...], 'none\": [\"{group_i_id}\", \"{group_ii_id}\", ...] } ```  You can use any combination of the above `group_ids` fields (also known as `FilterValue` properties)  to specify how customers are selected based on their group membership.   With the `any` option, the search returns customers in Groups `A` or `B` or ... of the list. With the `all` option, the search returns customers in Groups `1` and `2` and ... of the list With the `none` option, the search returns customers not in Groups `i` and not in `ii` and not in ... of the list.  If any of the search conditions is not met, including when an invalid or non-existent group ID is provided, the result is an empty list.   You can use the `group_ids` search filter with other available filters.   You cannot use the `group_ids` filter to select customers based on segment membership.
      * @var \SquareConnect\Model\FilterValue
      */
    protected $group_ids;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["creation_source"])) {
              $this->creation_source = $data["creation_source"];
            } else {
              $this->creation_source = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
            if (isset($data["group_ids"])) {
              $this->group_ids = $data["group_ids"];
            } else {
              $this->group_ids = null;
            }
        }
    }
    /**
     * Gets creation_source
     * @return \SquareConnect\Model\CustomerCreationSourceFilter
     */
    public function getCreationSource()
    {
        return $this->creation_source;
    }
  
    /**
     * Sets creation_source
     * @param \SquareConnect\Model\CustomerCreationSourceFilter $creation_source A filter to select customers based on their creation source.
     * @return $this
     */
    public function setCreationSource($creation_source)
    {
        $this->creation_source = $creation_source;
        return $this;
    }
    /**
     * Gets created_at
     * @return \SquareConnect\Model\TimeRange
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param \SquareConnect\Model\TimeRange $created_at A filter to select customers based on when they were created.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return \SquareConnect\Model\TimeRange
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param \SquareConnect\Model\TimeRange $updated_at A filter to select customers based on when they were updated.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets group_ids
     * @return \SquareConnect\Model\FilterValue
     */
    public function getGroupIds()
    {
        return $this->group_ids;
    }
  
    /**
     * Sets group_ids
     * @param \SquareConnect\Model\FilterValue $group_ids A filter to select customers based on their group membership.  The `group_ids` is a JSON object of the following general format: ``` \"group_ids\": { \"any\":  [\"{group_a_id}\", \"{group_b_id}\", ...], \"all\":  [\"{group_1_id}\", \"{group_2_id}\", ...], 'none\": [\"{group_i_id}\", \"{group_ii_id}\", ...] } ```  You can use any combination of the above `group_ids` fields (also known as `FilterValue` properties)  to specify how customers are selected based on their group membership.   With the `any` option, the search returns customers in Groups `A` or `B` or ... of the list. With the `all` option, the search returns customers in Groups `1` and `2` and ... of the list With the `none` option, the search returns customers not in Groups `i` and not in `ii` and not in ... of the list.  If any of the search conditions is not met, including when an invalid or non-existent group ID is provided, the result is an empty list.   You can use the `group_ids` search filter with other available filters.   You cannot use the `group_ids` filter to select customers based on segment membership.
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->group_ids = $group_ids;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
