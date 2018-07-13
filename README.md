# Pressbooks Coding Standards

These are our coding standards. There are many like these, but these are ours.

Our standards are basically [Human Made's coding standards](https://github.com/humanmade/coding-standards) with a few tweaks:

 + Use camelCase for class methods & properties, UPPERCASE for class constants, snake_case everywhere else.
 + PHP Sessions are allowed.
 + [A few more...](https://github.com/pressbooks/coding-standards/blob/master/Pressbooks/ruleset.xml)

## Tips

Pressbooks classes that extend WP Core classes will fail the `PSR1.Methods.CamelCapsMethodName` rule. In those cases, add something like this in your phpcs.ruleset.xml file:

```xml
<rule ref="PSR1.Methods.CamelCapsMethodName" >   
    <exclude-pattern>/inc/admin/class-catalog-list-table.php</exclude-pattern>
    <exclude-pattern>/inc/admin/class-network-managers-list-table.php</exclude-pattern>
    <exclude-pattern>/api/endpoints/controller/*</exclude-pattern>
</rule>
```

Link to docs: https://docs.pressbooks.org/coding-standards/ 
