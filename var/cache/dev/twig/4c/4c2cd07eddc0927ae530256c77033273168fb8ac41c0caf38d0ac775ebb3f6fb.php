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
        $__internal_cbce4bf94312f24df2fc4f4d48428d15cf5fd152173331b992c44d8f67766401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbce4bf94312f24df2fc4f4d48428d15cf5fd152173331b992c44d8f67766401->enter($__internal_cbce4bf94312f24df2fc4f4d48428d15cf5fd152173331b992c44d8f67766401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1cc8843075c9975e8438b58fd8c3eace973a289e992ae237f87f23703f779888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc8843075c9975e8438b58fd8c3eace973a289e992ae237f87f23703f779888->enter($__internal_1cc8843075c9975e8438b58fd8c3eace973a289e992ae237f87f23703f779888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_cbce4bf94312f24df2fc4f4d48428d15cf5fd152173331b992c44d8f67766401->leave($__internal_cbce4bf94312f24df2fc4f4d48428d15cf5fd152173331b992c44d8f67766401_prof);

        
        $__internal_1cc8843075c9975e8438b58fd8c3eace973a289e992ae237f87f23703f779888->leave($__internal_1cc8843075c9975e8438b58fd8c3eace973a289e992ae237f87f23703f779888_prof);

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
