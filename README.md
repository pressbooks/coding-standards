# Pressbooks Coding Standards

These are our coding standards. There are many like these, but these are ours.

## Tweaks

Pressbooks classes that extend WP Core classes will fail the `PSR1.Methods.CamelCapsMethodName` rule. In those cases, add something like this in your phpcs.ruleset.xml file:

```xml
<rule ref="PSR1.Methods.CamelCapsMethodName" >   
    <exclude-pattern>/inc/admin/class-catalog-list-table.php</exclude-pattern>
    <exclude-pattern>/inc/admin/class-network-managers-list-table.php</exclude-pattern>
    <exclude-pattern>/api/endpoints/controller/*</exclude-pattern>
</rule>
```