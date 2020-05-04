<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Twint
{
    /**
     * @var \DateTime|null
     * @SerializedName("CertificateExpirationDate")
     * @Type("DateTime")
     */
    private $certificateExpirationDate;

    public function getCertificateExpirationDate(): ?\DateTime
    {
        return $this->certificateExpirationDate;
    }
}
