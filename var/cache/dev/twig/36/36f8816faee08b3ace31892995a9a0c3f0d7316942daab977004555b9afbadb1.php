<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_64758c7d4a80afbfbf0c23ffecef34269059526dccbb4706918ae45e508582d7 extends Twig_Template
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
        $__internal_e85371feeb28de2442a7585d629fde0718fad111b62258608ad5264e3eaf6432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85371feeb28de2442a7585d629fde0718fad111b62258608ad5264e3eaf6432->enter($__internal_e85371feeb28de2442a7585d629fde0718fad111b62258608ad5264e3eaf6432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_74a23341b8f59d3d40b77551e5c690ccc60105eab3c65c4d5eff6069a6b93b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a23341b8f59d3d40b77551e5c690ccc60105eab3c65c4d5eff6069a6b93b3e->enter($__internal_74a23341b8f59d3d40b77551e5c690ccc60105eab3c65c4d5eff6069a6b93b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e85371feeb28de2442a7585d629fde0718fad111b62258608ad5264e3eaf6432->leave($__internal_e85371feeb28de2442a7585d629fde0718fad111b62258608ad5264e3eaf6432_prof);

        
        $__internal_74a23341b8f59d3d40b77551e5c690ccc60105eab3c65c4d5eff6069a6b93b3e->leave($__internal_74a23341b8f59d3d40b77551e5c690ccc60105eab3c65c4d5eff6069a6b93b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
