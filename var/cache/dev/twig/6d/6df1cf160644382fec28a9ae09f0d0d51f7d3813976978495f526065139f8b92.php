<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_808fcca7eec80d5b0c4a166381589b9a0bac0f7e2eb94c16a1e491e1a72358bb extends Twig_Template
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
        $__internal_4b0d83434f00d7465ca113bb23baed79c50fbe9314a11ef15b1cfb1d27d328fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0d83434f00d7465ca113bb23baed79c50fbe9314a11ef15b1cfb1d27d328fe->enter($__internal_4b0d83434f00d7465ca113bb23baed79c50fbe9314a11ef15b1cfb1d27d328fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_27be46be15ec539746958f3b57b4730a78efef74c1edd100df3d3beb3595a848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27be46be15ec539746958f3b57b4730a78efef74c1edd100df3d3beb3595a848->enter($__internal_27be46be15ec539746958f3b57b4730a78efef74c1edd100df3d3beb3595a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_4b0d83434f00d7465ca113bb23baed79c50fbe9314a11ef15b1cfb1d27d328fe->leave($__internal_4b0d83434f00d7465ca113bb23baed79c50fbe9314a11ef15b1cfb1d27d328fe_prof);

        
        $__internal_27be46be15ec539746958f3b57b4730a78efef74c1edd100df3d3beb3595a848->leave($__internal_27be46be15ec539746958f3b57b4730a78efef74c1edd100df3d3beb3595a848_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
