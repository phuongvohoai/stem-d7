<?php
/**
 * @file
 * gavias_educar_portfolio_features.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function gavias_educar_portfolio_features_taxonomy_default_vocabularies() {
  return array(
    'portfolio_tags' => array(
      'name' => 'Portfolio Tags',
      'machine_name' => 'portfolio_tags',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
