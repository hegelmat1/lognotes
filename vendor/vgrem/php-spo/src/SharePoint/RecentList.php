<?php

/**
 * Generated  2022-10-08T10:32:22+03:00 16.0.22921.12007
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
class RecentList extends ClientObject
{
    /**
     * @return integer
     */
    public function getlastViewDate()
    {
        if (!$this->isPropertyAvailable("lastViewDate")) {
            return null;
        }
        return $this->getProperty("lastViewDate");
    }
    /**
     * @var integer
     */
    public function setlastViewDate($value)
    {
        $this->setProperty("lastViewDate", $value, true);
    }
    /**
     * @return string
     */
    public function getlistId()
    {
        if (!$this->isPropertyAvailable("listId")) {
            return null;
        }
        return $this->getProperty("listId");
    }
    /**
     * @var string
     */
    public function setlistId($value)
    {
        $this->setProperty("listId", $value, true);
    }
    /**
     * @return string
     */
    public function getlistTitle()
    {
        if (!$this->isPropertyAvailable("listTitle")) {
            return null;
        }
        return $this->getProperty("listTitle");
    }
    /**
     * @var string
     */
    public function setlistTitle($value)
    {
        $this->setProperty("listTitle", $value, true);
    }
    /**
     * @return string
     */
    public function getlistUrl()
    {
        if (!$this->isPropertyAvailable("listUrl")) {
            return null;
        }
        return $this->getProperty("listUrl");
    }
    /**
     * @var string
     */
    public function setlistUrl($value)
    {
        $this->setProperty("listUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getsiteId()
    {
        if (!$this->isPropertyAvailable("siteId")) {
            return null;
        }
        return $this->getProperty("siteId");
    }
    /**
     * @var string
     */
    public function setsiteId($value)
    {
        $this->setProperty("siteId", $value, true);
    }
    /**
     * @return string
     */
    public function getcolor()
    {
        if (!$this->isPropertyAvailable("color")) {
            return null;
        }
        return $this->getProperty("color");
    }
    /**
     * @var string
     */
    public function setcolor($value)
    {
        $this->setProperty("color", $value, true);
    }
    /**
     * @return string
     */
    public function getcreatedByName()
    {
        if (!$this->isPropertyAvailable("createdByName")) {
            return null;
        }
        return $this->getProperty("createdByName");
    }
    /**
     * @var string
     */
    public function setcreatedByName($value)
    {
        $this->setProperty("createdByName", $value, true);
    }
    /**
     * @return string
     */
    public function getcreatedByUpn()
    {
        if (!$this->isPropertyAvailable("createdByUpn")) {
            return null;
        }
        return $this->getProperty("createdByUpn");
    }
    /**
     * @var string
     */
    public function setcreatedByUpn($value)
    {
        $this->setProperty("createdByUpn", $value, true);
    }
    /**
     * @return string
     */
    public function getcreatedDate()
    {
        if (!$this->isPropertyAvailable("createdDate")) {
            return null;
        }
        return $this->getProperty("createdDate");
    }
    /**
     * @var string
     */
    public function setcreatedDate($value)
    {
        $this->setProperty("createdDate", $value, true);
    }
    /**
     * @return string
     */
    public function geticon()
    {
        if (!$this->isPropertyAvailable("icon")) {
            return null;
        }
        return $this->getProperty("icon");
    }
    /**
     * @var string
     */
    public function seticon($value)
    {
        $this->setProperty("icon", $value, true);
    }
    /**
     * @return string
     */
    public function getlastModifiedDate()
    {
        if (!$this->isPropertyAvailable("lastModifiedDate")) {
            return null;
        }
        return $this->getProperty("lastModifiedDate");
    }
    /**
     * @var string
     */
    public function setlastModifiedDate($value)
    {
        $this->setProperty("lastModifiedDate", $value, true);
    }
    /**
     * @return string
     */
    public function getlastviewDateTime()
    {
        if (!$this->isPropertyAvailable("lastviewDateTime")) {
            return null;
        }
        return $this->getProperty("lastviewDateTime");
    }
    /**
     * @var string
     */
    public function setlastviewDateTime($value)
    {
        $this->setProperty("lastviewDateTime", $value, true);
    }
    /**
     * @return bool
     */
    public function getshouldRemove()
    {
        if (!$this->isPropertyAvailable("shouldRemove")) {
            return null;
        }
        return $this->getProperty("shouldRemove");
    }
    /**
     * @var bool
     */
    public function setshouldRemove($value)
    {
        $this->setProperty("shouldRemove", $value, true);
    }
    /**
     * @return string
     */
    public function getsiteColor()
    {
        if (!$this->isPropertyAvailable("siteColor")) {
            return null;
        }
        return $this->getProperty("siteColor");
    }
    /**
     * @var string
     */
    public function setsiteColor($value)
    {
        $this->setProperty("siteColor", $value, true);
    }
    /**
     * @return string
     */
    public function getsiteTitle()
    {
        if (!$this->isPropertyAvailable("siteTitle")) {
            return null;
        }
        return $this->getProperty("siteTitle");
    }
    /**
     * @var string
     */
    public function setsiteTitle($value)
    {
        $this->setProperty("siteTitle", $value, true);
    }
    /**
     * @return string
     */
    public function getsiteUrl()
    {
        if (!$this->isPropertyAvailable("siteUrl")) {
            return null;
        }
        return $this->getProperty("siteUrl");
    }
    /**
     * @var string
     */
    public function setsiteUrl($value)
    {
        $this->setProperty("siteUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getwebId()
    {
        if (!$this->isPropertyAvailable("webId")) {
            return null;
        }
        return $this->getProperty("webId");
    }
    /**
     * @var string
     */
    public function setwebId($value)
    {
        $this->setProperty("webId", $value, true);
    }
    /**
     * @return string
     */
    public function getwebTemplateConfiguration()
    {
        if (!$this->isPropertyAvailable("webTemplateConfiguration")) {
            return null;
        }
        return $this->getProperty("webTemplateConfiguration");
    }
    /**
     * @var string
     */
    public function setwebTemplateConfiguration($value)
    {
        $this->setProperty("webTemplateConfiguration", $value, true);
    }
    /**
     * @return string
     */
    public function gettemplateTypeId()
    {
        return $this->getProperty("templateTypeId");
    }
    /**
     * @var string
     */
    public function settemplateTypeId($value)
    {
        return $this->setProperty("templateTypeId", $value, true);
    }
}