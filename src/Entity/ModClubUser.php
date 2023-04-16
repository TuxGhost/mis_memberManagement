<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ModClubUser
 *
 * @ORM\Table(name="mod_club_user", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="id", columns={"id", "username"}), @ORM\Index(name="country", columns={"country"})})
 * @ORM\Entity
 */
class ModClubUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="member_number", type="integer", nullable=false)
     */
    private $memberNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=64, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=64, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=false)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dob = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=128, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=10, nullable=false)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=128, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=15, nullable=false, options={"comment"="Telefoon"})
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone2", type="string", length=15, nullable=false, options={"comment"="GSM"})
     */
    private $telephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false, options={"comment"="0: Aspirant, 1: Lid, 2: Oud Lid"})
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="info_avond", type="boolean", nullable=false)
     */
    private $infoAvond;

    /**
     * @var bool
     *
     * @ORM\Column(name="board_member", type="boolean", nullable=false, options={"comment"="Bestuurslid"})
     */
    private $boardMember;

    /**
     * @var string
     *
     * @ORM\Column(name="board_type", type="string", length=32, nullable=false)
     */
    private $boardType;

    /**
     * @var string
     *
     * @ORM\Column(name="board_function", type="string", length=255, nullable=false, options={"comment"="Functie beschrijving"})
     */
    private $boardFunction;

    /**
     * @var bool
     *
     * @ORM\Column(name="blocked", type="boolean", nullable=false)
     */
    private $blocked;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="comments_intern", type="text", length=65535, nullable=false)
     */
    private $commentsIntern;

    /**
     * @var string
     *
     * @ORM\Column(name="referrer", type="string", length=255, nullable=false)
     */
    private $referrer;

    /**
     * @var string
     *
     * @ORM\Column(name="referrer_extra", type="string", length=255, nullable=false)
     */
    private $referrerExtra;

    /**
     * @var bool
     *
     * @ORM\Column(name="agree_list", type="boolean", nullable=false, options={"default"="1"})
     */
    private $agreeList = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="agree_data_20_years", type="boolean", nullable=false, options={"default"="1"})
     */
    private $agreeData20Years = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="can_post_on_wall", type="boolean", nullable=false, options={"default"="1"})
     */
    private $canPostOnWall = true;

    /**
     * @var int
     *
     * @ORM\Column(name="mailinglist_sub_id", type="integer", nullable=false)
     */
    private $mailinglistSubId;

    /**
     * @var int
     *
     * @ORM\Column(name="event_management_level", type="integer", nullable=false)
     */
    private $eventManagementLevel = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMemberNumber(): ?int
    {
        return $this->memberNumber;
    }

    public function setMemberNumber(int $memberNumber): self
    {
        $this->memberNumber = $memberNumber;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    public function setDob(\DateTimeInterface $dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getTelephone2(): ?string
    {
        return $this->telephone2;
    }

    public function setTelephone2(string $telephone2): self
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function isInfoAvond(): ?bool
    {
        return $this->infoAvond;
    }

    public function setInfoAvond(bool $infoAvond): self
    {
        $this->infoAvond = $infoAvond;

        return $this;
    }

    public function isBoardMember(): ?bool
    {
        return $this->boardMember;
    }

    public function setBoardMember(bool $boardMember): self
    {
        $this->boardMember = $boardMember;

        return $this;
    }

    public function getBoardType(): ?string
    {
        return $this->boardType;
    }

    public function setBoardType(string $boardType): self
    {
        $this->boardType = $boardType;

        return $this;
    }

    public function getBoardFunction(): ?string
    {
        return $this->boardFunction;
    }

    public function setBoardFunction(string $boardFunction): self
    {
        $this->boardFunction = $boardFunction;

        return $this;
    }

    public function isBlocked(): ?bool
    {
        return $this->blocked;
    }

    public function setBlocked(bool $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getCommentsIntern(): ?string
    {
        return $this->commentsIntern;
    }

    public function setCommentsIntern(string $commentsIntern): self
    {
        $this->commentsIntern = $commentsIntern;

        return $this;
    }

    public function getReferrer(): ?string
    {
        return $this->referrer;
    }

    public function setReferrer(string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function getReferrerExtra(): ?string
    {
        return $this->referrerExtra;
    }

    public function setReferrerExtra(string $referrerExtra): self
    {
        $this->referrerExtra = $referrerExtra;

        return $this;
    }

    public function isAgreeList(): ?bool
    {
        return $this->agreeList;
    }

    public function setAgreeList(bool $agreeList): self
    {
        $this->agreeList = $agreeList;

        return $this;
    }

    public function isAgreeData20Years(): ?bool
    {
        return $this->agreeData20Years;
    }

    public function setAgreeData20Years(bool $agreeData20Years): self
    {
        $this->agreeData20Years = $agreeData20Years;

        return $this;
    }

    public function isCanPostOnWall(): ?bool
    {
        return $this->canPostOnWall;
    }

    public function setCanPostOnWall(bool $canPostOnWall): self
    {
        $this->canPostOnWall = $canPostOnWall;

        return $this;
    }

    public function getMailinglistSubId(): ?int
    {
        return $this->mailinglistSubId;
    }

    public function setMailinglistSubId(int $mailinglistSubId): self
    {
        $this->mailinglistSubId = $mailinglistSubId;

        return $this;
    }

    public function getEventManagementLevel(): ?int
    {
        return $this->eventManagementLevel;
    }

    public function setEventManagementLevel(int $eventManagementLevel): self
    {
        $this->eventManagementLevel = $eventManagementLevel;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }


}
