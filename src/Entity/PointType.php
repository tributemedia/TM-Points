<?php

namespace Drupal\tm_points\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Point type entity.
 *
 * @ConfigEntityType(
 *   id = "point_type",
 *   label = @Translation("Point type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\tm_points\PointTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\tm_points\Form\PointTypeForm",
 *       "edit" = "Drupal\tm_points\Form\PointTypeForm",
 *       "delete" = "Drupal\tm_points\Form\PointTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "point_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "point",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/point_type/{point_type}",
 *     "add-form" = "/admin/structure/point_type/add",
 *     "edit-form" = "/admin/structure/point_type/{point_type}/edit",
 *     "delete-form" = "/admin/structure/point_type/{point_type}/delete",
 *     "collection" = "/admin/structure/point_type"
 *   }
 * )
 */
class PointType extends ConfigEntityBundleBase implements PointTypeInterface {

  /**
   * The Point type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Point type label.
   *
   * @var string
   */
  protected $label;

}
