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
        $__internal_988e3f5342e9628fda6750af084b09c756a29716c36415fd3f28db9c9ab10d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988e3f5342e9628fda6750af084b09c756a29716c36415fd3f28db9c9ab10d24->enter($__internal_988e3f5342e9628fda6750af084b09c756a29716c36415fd3f28db9c9ab10d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4f1e7899761c30fff216b1c3ef0c1145e193a5bb13e9de51f9095762d7bfeee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1e7899761c30fff216b1c3ef0c1145e193a5bb13e9de51f9095762d7bfeee8->enter($__internal_4f1e7899761c30fff216b1c3ef0c1145e193a5bb13e9de51f9095762d7bfeee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_988e3f5342e9628fda6750af084b09c756a29716c36415fd3f28db9c9ab10d24->leave($__internal_988e3f5342e9628fda6750af084b09c756a29716c36415fd3f28db9c9ab10d24_prof);

        
        $__internal_4f1e7899761c30fff216b1c3ef0c1145e193a5bb13e9de51f9095762d7bfeee8->leave($__internal_4f1e7899761c30fff216b1c3ef0c1145e193a5bb13e9de51f9095762d7bfeee8_prof);

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
