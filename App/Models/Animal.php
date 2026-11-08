<?php

namespace App\Models;

use Framework\Core\Model;

/**
 * Class Animal
 * Represents an animal in the shelter.
 *
 * The model is mapped to the `animals` table. Its properties have the same names as the table columns.
 *
 * @package App\Models
 */
class Animal extends Model
{
    /**
     * Properties that can be set from a request by setFromRequest(). The primary key is never set from a request.
     *
     * @var string[]|null
     */
    protected static ?array $fillable = ['name', 'species', 'age', 'location'];

    /**
     * Primary key of the animal, null until the animal is saved to the database.
     */
    protected ?int $id = null;

    /**
     * Name of the animal.
     */
    protected string $name = '';

    /**
     * Species of the animal (e.g. pes, mačka).
     */
    protected string $species = '';

    /**
     * Age of the animal in years.
     */
    protected int $age = 0;

    /**
     * Location (city) where the animal is.
     */
    protected string $location = '';

    /**
     * Returns the primary key of the animal.
     *
     * @return int|null The animal ID, or null if the animal has not been saved yet.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Returns the name of the animal.
     *
     * @return string The animal name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the name of the animal.
     *
     * @param string $name The new animal name.
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the species of the animal.
     *
     * @return string The animal species.
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * Sets the species of the animal.
     *
     * @param string $species The new animal species.
     * @return void
     */
    public function setSpecies(string $species): void
    {
        $this->species = $species;
    }

    /**
     * Returns the age of the animal in years.
     *
     * @return int The animal age.
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Sets the age of the animal in years.
     *
     * @param int $age The new animal age.
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * Returns the location of the animal.
     *
     * @return string The animal location.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Sets the location of the animal.
     *
     * @param string $location The new animal location.
     * @return void
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }
}
