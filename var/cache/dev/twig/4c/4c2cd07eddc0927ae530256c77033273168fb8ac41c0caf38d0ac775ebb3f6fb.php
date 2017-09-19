<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ff6148ba697436f604285df2deae39918a3cd8c94f20d26c33231d9a84749eae extends Twig_Template
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
        $__internal_0acc8b97a2b48d5d2c862659f2fe38fce8cdeba1cbae3fb8f3063edac28937e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acc8b97a2b48d5d2c862659f2fe38fce8cdeba1cbae3fb8f3063edac28937e5->enter($__internal_0acc8b97a2b48d5d2c862659f2fe38fce8cdeba1cbae3fb8f3063edac28937e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7666e083e74c024fc800c30278922ad343a7fced5fb6bf8e6766a4a14120be73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7666e083e74c024fc800c30278922ad343a7fced5fb6bf8e6766a4a14120be73->enter($__internal_7666e083e74c024fc800c30278922ad343a7fced5fb6bf8e6766a4a14120be73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0acc8b97a2b48d5d2c862659f2fe38fce8cdeba1cbae3fb8f3063edac28937e5->leave($__internal_0acc8b97a2b48d5d2c862659f2fe38fce8cdeba1cbae3fb8f3063edac28937e5_prof);

        
        $__internal_7666e083e74c024fc800c30278922ad343a7fced5fb6bf8e6766a4a14120be73->leave($__internal_7666e083e74c024fc800c30278922ad343a7fced5fb6bf8e6766a4a14120be73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
