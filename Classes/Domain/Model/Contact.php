<?php

namespace TWOH\TwohKickstarter\Domain\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Contact extends AbstractEntity
{

    protected ?string $title = '';
    protected ?string $subTitle = '';
    protected ?ObjectStorage $image = null;
    protected ?string $position = '';
    protected ?string $companyName = '';
    protected ?string $companyNameAppendix = '';
    protected ?string $companyAddress = '';
    protected ?string $companyAddressAppendix = '';
    protected ?string $phone = '';
    protected ?string $email = '';
    protected ?string $emailTitle = '';
    protected ?string $website = '';
    protected ?string $websiteTitle = '';

    /**
     * @param array|null $data
     */
    public function __construct(?array $data = [])
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $callFunction = 'set' . GeneralUtility::underscoredToLowerCamelCase($key);
                if (is_callable([$this,$callFunction])) {
                    $this->$callFunction($value);
                }
            }
        }
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(?string $title): Contact
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    /**
     * @param string|null $subTitle
     */
    public function setSubTitle(?string $subTitle): void
    {
        $this->subTitle = $subTitle;
    }

    /**
     * @return ObjectStorage<FileReference>|null
     */
    public function getImage(): ?ObjectStorage
    {
        return $this->image;
    }

    /**
     * @param ObjectStorage<FileReference>|null $image
     * @return $this
     */
    public function setImage(?ObjectStorage $image): Contact
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @param FileReference|null $image
     * @return $this
     */
    public function addImage(?FileReference $image): Contact
    {
        $this->image->attach($image);
        return $this;
    }

    /**
     * @param FileReference|null $image
     * @return $this
     */
    public function removeImage(?FileReference $image): Contact
    {
        $this->image->detach($image);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * @param string|null $position
     * @return $this
     */
    public function setPosition(?string $position): Contact
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string|null $companyName
     * @return $this
     */
    public function setCompanyName(?string $companyName): Contact
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCompanyNameAppendix(): ?string
    {
        return $this->companyNameAppendix;
    }

    /**
     * @param string|null $companyNameAppendix
     * @return $this
     */
    public function setCompanyNameAppendix(?string $companyNameAppendix): Contact
    {
        $this->companyNameAppendix = $companyNameAppendix;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return $this
     */
    public function setPhone(?string $phone): Contact
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail(?string $email): Contact
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailTitle(): ?string
    {
        return $this->emailTitle;
    }

    /**
     * @param string|null $emailTitle
     * @return $this
     */
    public function setEmailTitle(?string $emailTitle): Contact
    {
        $this->emailTitle = $emailTitle;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     * @return $this
     */
    public function setWebsite(?string $website): Contact
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsiteTitle(): ?string
    {
        return $this->websiteTitle;
    }

    /**
     * @param string|null $websiteTitle
     * @return $this
     */
    public function setWebsiteTitle(?string $websiteTitle): Contact
    {
        $this->websiteTitle = $websiteTitle;
        return $this;
    }

    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress(?string $companyAddress): void
    {
        $this->companyAddress = $companyAddress;
    }

    public function getCompanyAddressAppendix(): ?string
    {
        return $this->companyAddressAppendix;
    }

    public function setCompanyAddressAppendix(?string $companyAddressAppendix): void
    {
        $this->companyAddressAppendix = $companyAddressAppendix;
    }



}