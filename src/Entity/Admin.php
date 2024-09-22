namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_admin;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mot_de_passe;

    // Getter for id_admin
    public function getIdAdmin(): ?int
    {
        return $this->id_admin;
    }

    // Setter for nom
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    // Getter for nom
    public function getNom(): ?string
    {
        return $this->nom;
    }

    // Setter for email
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    // Getter for email
    public function getEmail(): ?string
    {
        return $this->email;
    }

    // Setter for mot_de_passe
    public function setMotDePasse(string $mot_de_passe): self
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    // Getter for mot_de_passe
    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }
}
