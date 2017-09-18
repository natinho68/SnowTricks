<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9b7e9b5a50d6745fc109aa0d90b299b01edb3877dfe9133e523aee5445c8148e extends Twig_Template
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
        $__internal_e7000b1cfdcc804eb833815de390c5ae6d20a326f1c66dff0973eb3693fdb8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7000b1cfdcc804eb833815de390c5ae6d20a326f1c66dff0973eb3693fdb8e0->enter($__internal_e7000b1cfdcc804eb833815de390c5ae6d20a326f1c66dff0973eb3693fdb8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_37ab27b90516a53675a77cbcb88e6dcc1e4f3a26d52ff4ce8c3aca965bac6f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ab27b90516a53675a77cbcb88e6dcc1e4f3a26d52ff4ce8c3aca965bac6f2a->enter($__internal_37ab27b90516a53675a77cbcb88e6dcc1e4f3a26d52ff4ce8c3aca965bac6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e7000b1cfdcc804eb833815de390c5ae6d20a326f1c66dff0973eb3693fdb8e0->leave($__internal_e7000b1cfdcc804eb833815de390c5ae6d20a326f1c66dff0973eb3693fdb8e0_prof);

        
        $__internal_37ab27b90516a53675a77cbcb88e6dcc1e4f3a26d52ff4ce8c3aca965bac6f2a->leave($__internal_37ab27b90516a53675a77cbcb88e6dcc1e4f3a26d52ff4ce8c3aca965bac6f2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
