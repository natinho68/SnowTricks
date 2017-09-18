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
        $__internal_3ceced504fbf46f11bef2004f1ef506d506298372dea6ba5a2a8818e8acef873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ceced504fbf46f11bef2004f1ef506d506298372dea6ba5a2a8818e8acef873->enter($__internal_3ceced504fbf46f11bef2004f1ef506d506298372dea6ba5a2a8818e8acef873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9c902381e192f747d69889a424256649c716147747d961db2e80b95da2c07d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c902381e192f747d69889a424256649c716147747d961db2e80b95da2c07d6d->enter($__internal_9c902381e192f747d69889a424256649c716147747d961db2e80b95da2c07d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3ceced504fbf46f11bef2004f1ef506d506298372dea6ba5a2a8818e8acef873->leave($__internal_3ceced504fbf46f11bef2004f1ef506d506298372dea6ba5a2a8818e8acef873_prof);

        
        $__internal_9c902381e192f747d69889a424256649c716147747d961db2e80b95da2c07d6d->leave($__internal_9c902381e192f747d69889a424256649c716147747d961db2e80b95da2c07d6d_prof);

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
