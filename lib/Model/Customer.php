<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class Customer implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'cards' => '\SquareConnect\Model\Card[]',
        'given_name' => 'string',
        'family_name' => 'string',
        'nickname' => 'string',
        'company_name' => 'string',
        'email_address' => 'string',
        'address' => '\SquareConnect\Model\Address',
        'phone_number' => 'string',
        'reference_id' => 'string',
        'note' => 'string',
        'preferences' => '\SquareConnect\Model\CustomerPreferences',
        'groups' => '\SquareConnect\Model\CustomerGroupInfo[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'cards' => 'cards',
        'given_name' => 'given_name',
        'family_name' => 'family_name',
        'nickname' => 'nickname',
        'company_name' => 'company_name',
        'email_address' => 'email_address',
        'address' => 'address',
        'phone_number' => 'phone_number',
        'reference_id' => 'reference_id',
        'note' => 'note',
        'preferences' => 'preferences',
        'groups' => 'groups'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'cards' => 'setCards',
        'given_name' => 'setGivenName',
        'family_name' => 'setFamilyName',
        'nickname' => 'setNickname',
        'company_name' => 'setCompanyName',
        'email_address' => 'setEmailAddress',
        'address' => 'setAddress',
        'phone_number' => 'setPhoneNumber',
        'reference_id' => 'setReferenceId',
        'note' => 'setNote',
        'preferences' => 'setPreferences',
        'groups' => 'setGroups'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'cards' => 'getCards',
        'given_name' => 'getGivenName',
        'family_name' => 'getFamilyName',
        'nickname' => 'getNickname',
        'company_name' => 'getCompanyName',
        'email_address' => 'getEmailAddress',
        'address' => 'getAddress',
        'phone_number' => 'getPhoneNumber',
        'reference_id' => 'getReferenceId',
        'note' => 'getNote',
        'preferences' => 'getPreferences',
        'groups' => 'getGroups'
    );
  
    /**
      * $id The customer's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $created_at The time when the customer was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at The time when the customer was last updated, in RFC 3339 format.
      * @var string
      */
    protected $updated_at;
    /**
      * $cards The non-confidential details of the customer's cards on file.
      * @var \SquareConnect\Model\Card[]
      */
    protected $cards;
    /**
      * $given_name The customer's given (i.e., first) name.
      * @var string
      */
    protected $given_name;
    /**
      * $family_name The customer's family (i.e., last) name.
      * @var string
      */
    protected $family_name;
    /**
      * $nickname The customer's nickname.
      * @var string
      */
    protected $nickname;
    /**
      * $company_name The name of the customer's company.
      * @var string
      */
    protected $company_name;
    /**
      * $email_address The customer's email address.
      * @var string
      */
    protected $email_address;
    /**
      * $address The customer's physical address.
      * @var \SquareConnect\Model\Address
      */
    protected $address;
    /**
      * $phone_number The customer's phone number.
      * @var string
      */
    protected $phone_number;
    /**
      * $reference_id A second ID you can set to associate the customer with an entity in another system.
      * @var string
      */
    protected $reference_id;
    /**
      * $note A note to associate with the customer.
      * @var string
      */
    protected $note;
    /**
      * $preferences The customer's preferences.
      * @var \SquareConnect\Model\CustomerPreferences
      */
    protected $preferences;
    /**
      * $groups The groups the customer belongs to.
      * @var \SquareConnect\Model\CustomerGroupInfo[]
      */
    protected $groups;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->created_at = $data["created_at"];
            $this->updated_at = $data["updated_at"];
            $this->cards = $data["cards"];
            $this->given_name = $data["given_name"];
            $this->family_name = $data["family_name"];
            $this->nickname = $data["nickname"];
            $this->company_name = $data["company_name"];
            $this->email_address = $data["email_address"];
            $this->address = $data["address"];
            $this->phone_number = $data["phone_number"];
            $this->reference_id = $data["reference_id"];
            $this->note = $data["note"];
            $this->preferences = $data["preferences"];
            $this->groups = $data["groups"];
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The customer's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The time when the customer was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at The time when the customer was last updated, in RFC 3339 format.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets cards
     * @return \SquareConnect\Model\Card[]
     */
    public function getCards()
    {
        return $this->cards;
    }
  
    /**
     * Sets cards
     * @param \SquareConnect\Model\Card[] $cards The non-confidential details of the customer's cards on file.
     * @return $this
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
        return $this;
    }
    /**
     * Gets given_name
     * @return string
     */
    public function getGivenName()
    {
        return $this->given_name;
    }
  
    /**
     * Sets given_name
     * @param string $given_name The customer's given (i.e., first) name.
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->given_name = $given_name;
        return $this;
    }
    /**
     * Gets family_name
     * @return string
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }
  
    /**
     * Sets family_name
     * @param string $family_name The customer's family (i.e., last) name.
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->family_name = $family_name;
        return $this;
    }
    /**
     * Gets nickname
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }
  
    /**
     * Sets nickname
     * @param string $nickname The customer's nickname.
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }
  
    /**
     * Sets company_name
     * @param string $company_name The name of the customer's company.
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }
    /**
     * Gets email_address
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->email_address;
    }
  
    /**
     * Sets email_address
     * @param string $email_address The customer's email address.
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
        return $this;
    }
    /**
     * Gets address
     * @return \SquareConnect\Model\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param \SquareConnect\Model\Address $address The customer's physical address.
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
  
    /**
     * Sets phone_number
     * @param string $phone_number The customer's phone number.
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
        return $this;
    }
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id A second ID you can set to associate the customer with an entity in another system.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note A note to associate with the customer.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Gets preferences
     * @return \SquareConnect\Model\CustomerPreferences
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
  
    /**
     * Sets preferences
     * @param \SquareConnect\Model\CustomerPreferences $preferences The customer's preferences.
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
        return $this;
    }
    /**
     * Gets groups
     * @return \SquareConnect\Model\CustomerGroupInfo[]
     */
    public function getGroups()
    {
        return $this->groups;
    }
  
    /**
     * Sets groups
     * @param \SquareConnect\Model\CustomerGroupInfo[] $groups The groups the customer belongs to.
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
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
