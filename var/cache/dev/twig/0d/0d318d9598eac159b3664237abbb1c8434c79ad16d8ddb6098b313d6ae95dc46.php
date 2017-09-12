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
        $__internal_0af9155e2807fbe7997eea63ddb2c9f36b473b99b1b90474e71d25e69d371c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af9155e2807fbe7997eea63ddb2c9f36b473b99b1b90474e71d25e69d371c5d->enter($__internal_0af9155e2807fbe7997eea63ddb2c9f36b473b99b1b90474e71d25e69d371c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b0994263f87fe136a2e07e19b485827c532eea517d085dbf5125801854be7577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0994263f87fe136a2e07e19b485827c532eea517d085dbf5125801854be7577->enter($__internal_b0994263f87fe136a2e07e19b485827c532eea517d085dbf5125801854be7577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_0af9155e2807fbe7997eea63ddb2c9f36b473b99b1b90474e71d25e69d371c5d->leave($__internal_0af9155e2807fbe7997eea63ddb2c9f36b473b99b1b90474e71d25e69d371c5d_prof);

        
        $__internal_b0994263f87fe136a2e07e19b485827c532eea517d085dbf5125801854be7577->leave($__internal_b0994263f87fe136a2e07e19b485827c532eea517d085dbf5125801854be7577_prof);

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
