<?php

/**
 * Generated  2023-09-30T09:13:50+00:00 16.0.24106.12014
 */
namespace Office365\SharePoint;

use Office365\Runtime\ResourcePath;
/**
 * Represents 
 * a version of a fileobject 
 * (1).
 */
class FileVersion extends BaseEntity
{
    /**
     * Specifies 
     * the check-in comment.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 1023. 
     * @return string
     */
    public function getCheckInComment()
    {
        if (!$this->isPropertyAvailable("CheckInComment")) {
            return null;
        }
        return $this->getProperty("CheckInComment");
    }
    /**
     * Specifies 
     * the check-in comment.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 1023. 
     * @var string
     */
    public function setCheckInComment($value)
    {
        $this->setProperty("CheckInComment", $value, true);
    }
    /**
     * Specifies 
     * the creation date and time for the file version.
     * @return string
     */
    public function getCreated()
    {
        if (!$this->isPropertyAvailable("Created")) {
            return null;
        }
        return $this->getProperty("Created");
    }
    /**
     * Specifies 
     * the creation date and time for the file version.
     * @var string
     */
    public function setCreated($value)
    {
        $this->setProperty("Created", $value, true);
    }
    /**
     * Gets the 
     * internal identifier for the file version.
     * @return integer
     */
    public function getID()
    {
        if (!$this->isPropertyAvailable("ID")) {
            return null;
        }
        return $this->getProperty("ID");
    }
    /**
     * Gets the 
     * internal identifier for the file version.
     * @var integer
     */
    public function setID($value)
    {
        $this->setProperty("ID", $value, true);
    }
    /**
     * Specifies 
     * whether the fileversion 
     * is the current version.
     * @return bool
     */
    public function getIsCurrentVersion()
    {
        if (!$this->isPropertyAvailable("IsCurrentVersion")) {
            return null;
        }
        return $this->getProperty("IsCurrentVersion");
    }
    /**
     * Specifies 
     * whether the fileversion 
     * is the current version.
     * @var bool
     */
    public function setIsCurrentVersion($value)
    {
        $this->setProperty("IsCurrentVersion", $value, true);
    }
    /**
     * Gets the 
     * length (in bytes) of the file version.
     * @return integer
     */
    public function getLength()
    {
        if (!$this->isPropertyAvailable("Length")) {
            return null;
        }
        return $this->getProperty("Length");
    }
    /**
     * Gets the 
     * length (in bytes) of the file version.
     * @var integer
     */
    public function setLength($value)
    {
        $this->setProperty("Length", $value, true);
    }
    /**
     * Gets the 
     * size of the file version in bytes.Obsolete. 
     * Use Length (section 3.2.5.70.1.1.8) 
     * instead. This will throw an InvalidOperationException for versions 
     * larger than 2 gigabytes. Use Length instead.
     * @return integer
     */
    public function getSize()
    {
        if (!$this->isPropertyAvailable("Size")) {
            return null;
        }
        return $this->getProperty("Size");
    }
    /**
     * Gets the 
     * size of the file version in bytes.Obsolete. 
     * Use Length (section 3.2.5.70.1.1.8) 
     * instead. This will throw an InvalidOperationException for versions 
     * larger than 2 gigabytes. Use Length instead.
     * @var integer
     */
    public function setSize($value)
    {
        $this->setProperty("Size", $value, true);
    }
    /**
     * Specifies 
     * the relative URL of the file version based on the URL for the site (2) 
     * or subsite.It MUST 
     * NOT be empty. It MUST be a URL of relative form. 
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * Specifies 
     * the relative URL of the file version based on the URL for the site (2) 
     * or subsite.It MUST 
     * NOT be empty. It MUST be a URL of relative form. 
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * Specifies 
     * the implementation-specific identifier of the file.It MUST 
     * NOT be NULL. 
     * @return string
     */
    public function getVersionLabel()
    {
        return $this->getProperty("VersionLabel");
    }
    /**
     * Specifies 
     * the implementation-specific identifier of the file.It MUST 
     * NOT be NULL. 
     * @var string
     */
    public function setVersionLabel($value)
    {
        $this->setProperty("VersionLabel", $value, true);
    }
    /**
     * Specifies 
     * the user that represents the person who created the file version. 
     * @return User
     */
    public function getCreatedBy()
    {
        if (!$this->isPropertyAvailable("CreatedBy")) {
            $this->setProperty("CreatedBy", new User($this->getContext(), new ResourcePath("CreatedBy", $this->getResourcePath())));
        }
        return $this->getProperty("CreatedBy");
    }
    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->getProperty("ExpirationDate");
    }
    /**
     * @var string
     */
    public function setExpirationDate($value)
    {
        return $this->setProperty("ExpirationDate", $value, true);
    }
    /**
     * @return string
     */
    public function getSnapshotDate()
    {
        return $this->getProperty("SnapshotDate");
    }
    /**
     * @var string
     */
    public function setSnapshotDate($value)
    {
        return $this->setProperty("SnapshotDate", $value, true);
    }
}