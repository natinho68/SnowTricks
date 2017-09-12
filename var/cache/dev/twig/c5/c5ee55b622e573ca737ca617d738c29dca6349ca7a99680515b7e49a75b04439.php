<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_84d9cd70f760db60911515b97f6d3e66a3eadd2535af6b6536d180f92a3d9b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d9cd70f760db60911515b97f6d3e66a3eadd2535af6b6536d180f92a3d9b43->enter($__internal_84d9cd70f760db60911515b97f6d3e66a3eadd2535af6b6536d180f92a3d9b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c8d7a33e4022b03656d9aa68c24541a145e86009137237dd65706fbee1ce4cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d7a33e4022b03656d9aa68c24541a145e86009137237dd65706fbee1ce4cd2->enter($__internal_c8d7a33e4022b03656d9aa68c24541a145e86009137237dd65706fbee1ce4cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_84d9cd70f760db60911515b97f6d3e66a3eadd2535af6b6536d180f92a3d9b43->leave($__internal_84d9cd70f760db60911515b97f6d3e66a3eadd2535af6b6536d180f92a3d9b43_prof);

        
        $__internal_c8d7a33e4022b03656d9aa68c24541a145e86009137237dd65706fbee1ce4cd2->leave($__internal_c8d7a33e4022b03656d9aa68c24541a145e86009137237dd65706fbee1ce4cd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
