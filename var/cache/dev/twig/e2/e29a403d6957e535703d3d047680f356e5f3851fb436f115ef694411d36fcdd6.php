<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_400140564fe7c0f57636f821a8d903e35b349bf7f883f0efa1e61139e7c8f527 extends Twig_Template
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
        $__internal_0e78d7c051296bdc8a15dd0aa256a638d0996e32f695b3bb340e6ec72a66388a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e78d7c051296bdc8a15dd0aa256a638d0996e32f695b3bb340e6ec72a66388a->enter($__internal_0e78d7c051296bdc8a15dd0aa256a638d0996e32f695b3bb340e6ec72a66388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f46ca109c6a5443a9966ab9003ad0995e2fb767bd7065c3d73e348bb432c5da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46ca109c6a5443a9966ab9003ad0995e2fb767bd7065c3d73e348bb432c5da0->enter($__internal_f46ca109c6a5443a9966ab9003ad0995e2fb767bd7065c3d73e348bb432c5da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0e78d7c051296bdc8a15dd0aa256a638d0996e32f695b3bb340e6ec72a66388a->leave($__internal_0e78d7c051296bdc8a15dd0aa256a638d0996e32f695b3bb340e6ec72a66388a_prof);

        
        $__internal_f46ca109c6a5443a9966ab9003ad0995e2fb767bd7065c3d73e348bb432c5da0->leave($__internal_f46ca109c6a5443a9966ab9003ad0995e2fb767bd7065c3d73e348bb432c5da0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
