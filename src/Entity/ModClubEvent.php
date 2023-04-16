<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ModClubEvent
 *
 * @ORM\Table(name="mod_club_event", indexes={@ORM\Index(name="creator", columns={"creator"})})
 * @ORM\Entity
 */
class ModClubEvent
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
     * @var int|null
     *
     * @ORM\Column(name="creator", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $creator;

    /**
     * @var bool
     *
     * @ORM\Column(name="paid_event", type="boolean", nullable=false)
     */
    private $paidEvent = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pay_after", type="boolean", nullable=false)
     */
    private $payAfter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $price = '0.00';

    /**
     * @var bool
     *
     * @ORM\Column(name="child_safe", type="boolean", nullable=false)
     */
    private $childSafe = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="wheelchair_safe", type="boolean", nullable=false)
     */
    private $wheelchairSafe = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="priority", type="boolean", nullable=false)
     */
    private $priority = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="board_member_event", type="boolean", nullable=true)
     */
    private $boardMemberEvent = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_start", type="datetime", nullable=true)
     */
    private $eventStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_end", type="datetime", nullable=true)
     */
    private $eventEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="event_repeat", type="string", length=10, nullable=false)
     */
    private $eventRepeat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_till", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $eventTill = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="attend_till", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $attendTill = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="attend_repeat", type="boolean", nullable=false)
     */
    private $attendRepeat;

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
     * @ORM\Column(name="lat", type="decimal", precision=15, scale=12, nullable=false)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="decimal", precision=15, scale=12, nullable=false)
     */
    private $lng;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

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

    /**
     * @var int
     *
     * @ORM\Column(name="old_id", type="integer", nullable=false)
     */
    private $oldId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name_nl", type="string", length=255, nullable=false)
     */
    private $nameNl;

    /**
     * @var string
     *
     * @ORM\Column(name="description_nl", type="text", length=65535, nullable=false)
     */
    private $descriptionNl;

    /**
     * @var string
     *
     * @ORM\Column(name="alias_nl", type="string", length=255, nullable=false)
     */
    private $aliasNl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreator(): ?int
    {
        return $this->creator;
    }

    public function setCreator(?int $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function isPaidEvent(): ?bool
    {
        return $this->paidEvent;
    }

    public function setPaidEvent(bool $paidEvent): self
    {
        $this->paidEvent = $paidEvent;

        return $this;
    }

    public function isPayAfter(): ?bool
    {
        return $this->payAfter;
    }

    public function setPayAfter(bool $payAfter): self
    {
        $this->payAfter = $payAfter;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function isChildSafe(): ?bool
    {
        return $this->childSafe;
    }

    public function setChildSafe(bool $childSafe): self
    {
        $this->childSafe = $childSafe;

        return $this;
    }

    public function isWheelchairSafe(): ?bool
    {
        return $this->wheelchairSafe;
    }

    public function setWheelchairSafe(bool $wheelchairSafe): self
    {
        $this->wheelchairSafe = $wheelchairSafe;

        return $this;
    }

    public function isPriority(): ?bool
    {
        return $this->priority;
    }

    public function setPriority(bool $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function isBoardMemberEvent(): ?bool
    {
        return $this->boardMemberEvent;
    }

    public function setBoardMemberEvent(?bool $boardMemberEvent): self
    {
        $this->boardMemberEvent = $boardMemberEvent;

        return $this;
    }

    public function getEventStart(): ?\DateTimeInterface
    {
        return $this->eventStart;
    }

    public function setEventStart(?\DateTimeInterface $eventStart): self
    {
        $this->eventStart = $eventStart;

        return $this;
    }

    public function getEventEnd(): ?\DateTimeInterface
    {
        return $this->eventEnd;
    }

    public function setEventEnd(?\DateTimeInterface $eventEnd): self
    {
        $this->eventEnd = $eventEnd;

        return $this;
    }

    public function getEventRepeat(): ?string
    {
        return $this->eventRepeat;
    }

    public function setEventRepeat(string $eventRepeat): self
    {
        $this->eventRepeat = $eventRepeat;

        return $this;
    }

    public function getEventTill(): ?\DateTimeInterface
    {
        return $this->eventTill;
    }

    public function setEventTill(\DateTimeInterface $eventTill): self
    {
        $this->eventTill = $eventTill;

        return $this;
    }

    public function getAttendTill(): ?\DateTimeInterface
    {
        return $this->attendTill;
    }

    public function setAttendTill(\DateTimeInterface $attendTill): self
    {
        $this->attendTill = $attendTill;

        return $this;
    }

    public function isAttendRepeat(): ?bool
    {
        return $this->attendRepeat;
    }

    public function setAttendRepeat(bool $attendRepeat): self
    {
        $this->attendRepeat = $attendRepeat;

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

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?string
    {
        return $this->lng;
    }

    public function setLng(string $lng): self
    {
        $this->lng = $lng;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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

    public function getOldId(): ?int
    {
        return $this->oldId;
    }

    public function setOldId(int $oldId): self
    {
        $this->oldId = $oldId;

        return $this;
    }

    public function getNameNl(): ?string
    {
        return $this->nameNl;
    }

    public function setNameNl(string $nameNl): self
    {
        $this->nameNl = $nameNl;

        return $this;
    }

    public function getDescriptionNl(): ?string
    {
        return $this->descriptionNl;
    }

    public function setDescriptionNl(string $descriptionNl): self
    {
        $this->descriptionNl = $descriptionNl;

        return $this;
    }

    public function getAliasNl(): ?string
    {
        return $this->aliasNl;
    }

    public function setAliasNl(string $aliasNl): self
    {
        $this->aliasNl = $aliasNl;

        return $this;
    }


}
