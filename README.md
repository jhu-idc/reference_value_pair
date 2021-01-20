This repo was originally created by: https://git.drupalcode.org/project/reference_value_pair

It is modified slightly to meet our needs here at JHU. 

Specific changes include:
 * the addition of a variant of the Reference Value Field Type called Language Value Pair that pairs a string with a Language Taxonomy Term.  
 * serialization into JSON-LD via a hook in the module code. 
 
Reference Value Pair FieldType is generic and will accomodate a string attached to any entity reference. 
 
The Language Value Pair is more specific and requires that a Language Taxonomy exists.  The Language Taxonomy must have a field in it named field_language_code.  The field_language_code needs to be string that this module can use to put into the JSON-LD for this widget. 

A good TODO would to bring this Language Taxonomy into this module to ensure that it's there. 

--------------------


CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

The Reference value pair module combines an entity reference with a free text
value field in one new field type.

Site builders often end up using field collection or entity reference modules
when all they want to do is store a value and a reference (e.g. to a taxonomy
term).

This module bundles the two things, a reference to some entity and a value
together in one field. It can reference any entity, the value field is a simple
text field.

One typical use is storing a measurement with its unit where the units are
stored in a taxonomy (e.g 50 liter, 20 cm, 80 %).

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/reference_value_pair

 * To submit bug reports and feature suggestions, or to track changes:
   https://www.drupal.org/project/issues/reference_value_pair


REQUIREMENTS
------------

This module requires no modules outside of Drupal core.


INSTALLATION
------------

 * Install the Reference value pair module as you would normally install a
   contributed Drupal module. Visit https://www.drupal.org/node/1897420 for
   further information.


CONFIGURATION
-------------

No configuration is necessary. Once enabled, a "Reference value pair" field is
available.


MAINTAINERS
-----------

Updates to this specific repo by:

 * Bethany Seeger (bseeger) - www.github.com/bseeger
 
Original maintainers for https://git.drupalcode.org/project/reference_value_pair

 * Michael Moritz (miiimooo) - https://www.drupal.org/u/miiimooo
 * Jose Jiménez (jjcarrion) - https://www.drupal.org/u/jjcarrion

Original Supporting organization for https://git.drupalcode.org/project/reference_value_pair

 * Digitalist Group - https://www.drupal.org/digitalist-group
