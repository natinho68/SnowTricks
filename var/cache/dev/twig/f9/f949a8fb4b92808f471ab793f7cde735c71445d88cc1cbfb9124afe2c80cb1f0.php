<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c2dfaa1b23b216bbc9ce988c377e43521d892024c3340fa257080de42f18e0c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da4bdd17a41d491f3d435522809c454870a1aa07d7a7ad5352398593667b5648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4bdd17a41d491f3d435522809c454870a1aa07d7a7ad5352398593667b5648->enter($__internal_da4bdd17a41d491f3d435522809c454870a1aa07d7a7ad5352398593667b5648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cb7f65422237e0bb279b6ad5805a44043a687c147680f75c9f5718c87d402c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7f65422237e0bb279b6ad5805a44043a687c147680f75c9f5718c87d402c42->enter($__internal_cb7f65422237e0bb279b6ad5805a44043a687c147680f75c9f5718c87d402c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_da4bdd17a41d491f3d435522809c454870a1aa07d7a7ad5352398593667b5648->leave($__internal_da4bdd17a41d491f3d435522809c454870a1aa07d7a7ad5352398593667b5648_prof);

        
        $__internal_cb7f65422237e0bb279b6ad5805a44043a687c147680f75c9f5718c87d402c42->leave($__internal_cb7f65422237e0bb279b6ad5805a44043a687c147680f75c9f5718c87d402c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
