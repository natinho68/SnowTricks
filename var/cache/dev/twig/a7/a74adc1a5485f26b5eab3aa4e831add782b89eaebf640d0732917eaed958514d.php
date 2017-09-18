<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d00b3f214028445a3500f45a8127962f2706a31790a3e44aa9210f41cc2bf5ce extends Twig_Template
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
        $__internal_739d7e0eb3654cc9461bb8c2266fd5f0b39dcb489cfb241246eec5fdb7707bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739d7e0eb3654cc9461bb8c2266fd5f0b39dcb489cfb241246eec5fdb7707bf3->enter($__internal_739d7e0eb3654cc9461bb8c2266fd5f0b39dcb489cfb241246eec5fdb7707bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_624b5984cfa3f195fa91877e5bbcd44e046dfa3f253896522eae0a2c22e3be21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624b5984cfa3f195fa91877e5bbcd44e046dfa3f253896522eae0a2c22e3be21->enter($__internal_624b5984cfa3f195fa91877e5bbcd44e046dfa3f253896522eae0a2c22e3be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_739d7e0eb3654cc9461bb8c2266fd5f0b39dcb489cfb241246eec5fdb7707bf3->leave($__internal_739d7e0eb3654cc9461bb8c2266fd5f0b39dcb489cfb241246eec5fdb7707bf3_prof);

        
        $__internal_624b5984cfa3f195fa91877e5bbcd44e046dfa3f253896522eae0a2c22e3be21->leave($__internal_624b5984cfa3f195fa91877e5bbcd44e046dfa3f253896522eae0a2c22e3be21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
