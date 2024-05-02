<?php declare(strict_types=1);

namespace IctBlogPlugin\Core\Content\IctBlog\Aggregate\IctBlogTranslation;

use IctBlogPlugin\Core\Content\IctBlog\IctBlogDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class IctBlogTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME ="ict_blog_translation";

    /**
     * @return string
     */
    public function getEntityName(): string
    {
        // TODO: Implement getEntityName() method.
        return self::ENTITY_NAME;
    }

     public function getEntityClass(): string
     {
         return IctBlogTranslationEntity::class; // TODO: Change the autogenerated stub
     }

     public function getCollectionClass(): string
     {
         return IctBlogTranslationCollection::class; // TODO: Change the autogenerated stub
     }

    public function getParentDefinitionClass(): string
    {
        return IctBlogDefinition::class; // TODO: Change the autogenerated stub
    }

    /**
     * @return FieldCollection
     */
    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('name','name')),
            (new StringField('description','description')),
            (new StringField('author','author')),
        ]);
    }
}