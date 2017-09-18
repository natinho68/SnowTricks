<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_eb6671fd161dda1e2ada626f4ea4641e222ea370ced56298a81af7ff993518dc extends Twig_Template
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
        $__internal_2dc72ddb548d47e357cf1dd7a13214fafb0dd78c77575b7e011388b1a7bfdcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc72ddb548d47e357cf1dd7a13214fafb0dd78c77575b7e011388b1a7bfdcbf->enter($__internal_2dc72ddb548d47e357cf1dd7a13214fafb0dd78c77575b7e011388b1a7bfdcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_23467af17de4b474fcbf9c5633cc3a8939c647ce61edb9689c735eb0bf5479ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23467af17de4b474fcbf9c5633cc3a8939c647ce61edb9689c735eb0bf5479ae->enter($__internal_23467af17de4b474fcbf9c5633cc3a8939c647ce61edb9689c735eb0bf5479ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2dc72ddb548d47e357cf1dd7a13214fafb0dd78c77575b7e011388b1a7bfdcbf->leave($__internal_2dc72ddb548d47e357cf1dd7a13214fafb0dd78c77575b7e011388b1a7bfdcbf_prof);

        
        $__internal_23467af17de4b474fcbf9c5633cc3a8939c647ce61edb9689c735eb0bf5479ae->leave($__internal_23467af17de4b474fcbf9c5633cc3a8939c647ce61edb9689c735eb0bf5479ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
