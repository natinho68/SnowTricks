<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c5c9375d9b89940dd81a9fa35f5a7bf7a9a9e20b5cddb35153f223565894d2c6 extends Twig_Template
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
        $__internal_b01385a5e9d9f2bcab3970198d687abf252bc511d7dcc575e3deed1b0899a09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01385a5e9d9f2bcab3970198d687abf252bc511d7dcc575e3deed1b0899a09c->enter($__internal_b01385a5e9d9f2bcab3970198d687abf252bc511d7dcc575e3deed1b0899a09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea8630c7e6c5b2a5a710362c2f73fda6d68ea3e19b0366229ce5999762656a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8630c7e6c5b2a5a710362c2f73fda6d68ea3e19b0366229ce5999762656a6b->enter($__internal_ea8630c7e6c5b2a5a710362c2f73fda6d68ea3e19b0366229ce5999762656a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b01385a5e9d9f2bcab3970198d687abf252bc511d7dcc575e3deed1b0899a09c->leave($__internal_b01385a5e9d9f2bcab3970198d687abf252bc511d7dcc575e3deed1b0899a09c_prof);

        
        $__internal_ea8630c7e6c5b2a5a710362c2f73fda6d68ea3e19b0366229ce5999762656a6b->leave($__internal_ea8630c7e6c5b2a5a710362c2f73fda6d68ea3e19b0366229ce5999762656a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
