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
        $__internal_2358735f55bea9ba510bac8717a77f61609f8cc6272ba67408f91369c717f4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2358735f55bea9ba510bac8717a77f61609f8cc6272ba67408f91369c717f4d9->enter($__internal_2358735f55bea9ba510bac8717a77f61609f8cc6272ba67408f91369c717f4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a7dd160e162894e96b723e63db8cbf171110a01f35aae94817e3788d236392e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dd160e162894e96b723e63db8cbf171110a01f35aae94817e3788d236392e7->enter($__internal_a7dd160e162894e96b723e63db8cbf171110a01f35aae94817e3788d236392e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_2358735f55bea9ba510bac8717a77f61609f8cc6272ba67408f91369c717f4d9->leave($__internal_2358735f55bea9ba510bac8717a77f61609f8cc6272ba67408f91369c717f4d9_prof);

        
        $__internal_a7dd160e162894e96b723e63db8cbf171110a01f35aae94817e3788d236392e7->leave($__internal_a7dd160e162894e96b723e63db8cbf171110a01f35aae94817e3788d236392e7_prof);

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
